<!DOCTYPE html>
<html>
<head>
	<title>All about view</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div id="container">
		<h3 v-html='text'></h3>
		<technorio></technorio>

		<h3>Buttons from component</h3>
		<kathmandu
		v-for="button in buttons"
		v-bind:info="button.text"
		v-bind:key="button.id"
		>
			
		</kathmandu>


	</div>
	<script type="text/javascript">
		Vue.component('technorio',{
			template:`<div>
			<h4>Home</h4>
			<button @click='showAlert'>Reverse</button>
			</div>`,
			methods:{showAlert(){
				container.text = container.text.split('').reverse().join('');
			}
			}
		})
		Vue.component('kathmandu',{
			props:['info'],
			template:`<button>@{{info}}</button>`
		})
		var container = new Vue({

			el:'#container',
			data:{
				text:'Reverse',
				buttons:[
				{id:0,text:'button1'},
				{id:1,text:'button2'},
				{id:2,text:'button3'},
				]
			}
		});
	</script>

</body>
</html>