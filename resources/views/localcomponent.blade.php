<!DOCTYPE html>
<html>
<head>
	<title>Vue local component</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="container">
		<component-a></component-a>
		<!-- <author
		v-for="personData in personInfo"
		v-bind:personInfo="personData"
		v-bind:key="personData.id"
		></author> -->

			<post
			v-bind:author="{
			name: 'Veronica',
			company: 'Veridian Dynamics'
			}"
			></post>

	</div>
<script type="text/javascript">
	var componentA = Vue.component('first-component',{
		template:`<h5>First component</h5>`
	})
	var componentB = Vue.component('second-component',{
		template:`<h4>Second component</h4>`
	})
	var componentC = Vue.component('third-component',{
		template:`<h3>Third component</h3>`
	})
	Vue.component('post',{
		props:['author'],
		template:`<div><p style='color:red'>@{{author.name}}</p><p>@{{author.company}}</p></div>`
	})
	var container = new Vue({
		el:'#container',
		data:{
			personInfo:[
			{id:0,name:'safal'},
			{id:0,level:'bachelor'}

			],
			author:{name:'',level:''}
		},
		components:{
			'component-a':componentA,
			'component-b':componentB,
			'component-c':componentC,
		}

	})
</script>
</body>
</html>