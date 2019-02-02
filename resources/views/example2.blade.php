<!DOCTYPE html>
<html>
<head>
	<title>Vue example2</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="container">
		<data-buttons
		v-for="button in dataButtons"
		v-bind:name="button.name"
		v-bind:key="button.id"
		>
			
		</data-buttons>
		<!-- lodaing data content according to click -->
		<component
		v-bind:is="buttoncontent"
		></component>

		<button @click='postData'>Post</button>
		<span id="error" ref='mySpan'></span>
		<button @click="getId">Click to get Id</button>

	</div>
<script type="text/javascript">
	//globally registered vue components
	//components to display buttons
	Vue.component('data-buttons',{
		props:['name'],
		template:`<button @click="changeData">@{{name}}</button>`,
		methods:{
			changeData(){
				container.buttoncontent= this.name;
			}
		}
	})
	//components to display buttons ended
	Vue.component('data1',{
		template:`<div>This is content of data 1</div>`
	})
	Vue.component('data2',{
		template:`<div>This is content of data 2</div>`

	})
	Vue.component('data3',{
		template:`<div>This is content of data 3</div>`

	})
	// globally registerd vue components ended
	var container = new Vue({
		el:'#container',
		data:{
			buttoncontent:"data1",
			dataButtons:[
			{id:0,name:'data1'},
			{id:1,name:'data2'},
			{id:2,name:'data3'}
			]

		},
		methods:{
			postData:function(){
				axios.post('ok',{name:'safal'})
				.then((response)=>{
					console.log(response.data);
				})
				.catch(error=>
					document.getElementById('error').innerText= error.response.data.errors['email']
				)
			},
			getID:function(){
				alert('ok')
			}
		}
	})
</script>
</body>
</html>