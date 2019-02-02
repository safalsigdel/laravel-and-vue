<!DOCTYPE html>
<html>
<head>
	<title>Vue component</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div id="app">
			<!-- Using props in vue js -->
			<h1>List 1</h1>
		<ol>
			<todo-item
			v-for="item in groceryList"
			v-bind:todo="item"
			v-bind:key="item.id">
		</todo-item>
	</ol>
	<!-- another ol list  -->
	<h1>List 2</h1>
	<ol>
		<special-item

		v-for="list in specialList"
		v-bind:myprop="list"
		v-bind:key="list.id"
		>
			
		</special-item>
	</ol>
	<h1>List 3</h1>
	<ol>
	<framework v-for="item in frameworkList" v-bind:frame="item" v-bind:key="item.id">
		
	</framework>
	</ol>
	<!-- vue component called button counter -->
	<button-counter></button-counter>
	<button-counter></button-counter>
	<button-counter></button-counter>
	<!-- we can reuse component like above -->


	<!-- passing data to child view -->
		<blog-post-title data="view is so fun" title='ok'></blog-post-title>
	<!-- passing data to child view -->


</div>

<script type="text/javascript">

	Vue.component('todo-item', {
		props: ['todo'],
		template: '<li>@{{ todo.text }}</li>'
	})
	Vue.component('special-item',{
		props:['myprop'],
		template:'<li>@{{ myprop.text }}</li>'
	})
	Vue.component('framework',{
		props:['frame'],
		template:'<li>@{{frame.name}}</li>'
	})
	Vue.component('button-counter',{
		data:function(){
			return{
				count:0
			}
		},
		template:'<button @click="count++"">you clicked me @{{ count }} times.</button>'
	})
	Vue.component('blog-post-title',{
		props:['data','title'],
		template:'<h3>@{{data}} @{{title}}</h3>'
	})

	var app = new Vue({
		el:'#app',
		data:{
			groceryList:[
			{id:0,text:'Laravel'},
			{id:1,text:'Symphony'},
			{id:2,text:'Zend'},
			],
			specialList:[
			{id:0,text:'Java'},
			{id:1,text:'PHP'},
			{id:2,text:'Python'},
			],
			frameworkList:[
			{id:0,name:'Django'},
			{id:1,name:'Spring'},
			{id:0,name:'Laravel'},

			],
		}
	})
</script>

</body>
</html>