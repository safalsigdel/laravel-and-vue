<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="js/app.js"></script>
	<style type="text/css">
		[contenteditable="true"].single-line {
    white-space: nowrap;
    width:200px;
    overflow: hidden;
} 
[contenteditable="true"].single-line br {
    display:none;

}
[contenteditable="true"].single-line * {
    display:inline;
    white-space:nowrap;
}
	</style>
</head>
<body>
	<div id="app">
		<div class="col-md-12 col-md-offset-2">
			<table style="white-space: nowrap;" class="table table-responsive">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>City</th>
					<th>Country</th>
				</tr>
				
				<tr v-for="personData in people" :key="people.id">
					<td contenteditable="true" class="single-line name"  @keyup.enter="update($event,personData.id)">@{{personData.name}}</td>
					<td @keyup.enter="update($event,personData.id)" contenteditable="true" class="single-line email">@{{personData.email}}</td>
					<td @keyup.enter="update($event,personData.id)" contenteditable="true" class="single-line address">@{{personData.address}}</td>
					<td @keyup.enter="update($event,personData.id)" contenteditable="true" class="single-line city">@{{personData.city}}</td>
					<td @keyup.enter="update($event,personData.id)" contenteditable="true" class="single-line country">@{{personData.country}}</td>
				</tr>
			</table>
		</div>

	</div>
	<script type="text/javascript">
		var app = new Vue({
			el:'#app',
			data:{
				disabled:'disabled',
				people:{},
			},
			mounted(){
				this.getAllPersonData();
			},
			methods:{
				update:function(event,id)
				{
					var id = id;
					var data = event.target.innerText;
					var column = event.target.className;
					axios.post('update-person-data',{id:id,data:data,column:column})
					.then((response)=>{
						alert('updated');
					})
					.catch(function(error){
						console.log(error);
					})
				},
				getAllPersonData:function()
				{
					axios.get('get-all-person-data')
					.then((response)=>{
						this.people = response.data;
					})
					.catch(function(error){
						console.log(error)
					})
				}
			}
		
		});
	</script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</body>
</html>