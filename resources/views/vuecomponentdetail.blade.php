<!DOCTYPE html>
<html>
<head>
	<title>Vue component detail</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script type="text/javascript" src="js/app.js"></script>
	<style type="text/css">
		.tab-button {
  padding: 6px 10px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border: 1px solid #ccc;
  cursor: pointer;
  background: #f0f0f0;
  margin-bottom: -1px;
  margin-right: -1px;
}
.tab-button:hover {
  background: #e0e0e0;
}
.tab-button.active {
  background: #e0e0e0;
}
.tab {
  border: 1px solid #ccc;
  padding: 10px;
}
	</style>
</head>
<body>
	<div id="app">
		<div>
		<blog-post title="This is h1 tag from props"></blog-post>

		<!-- clickable button from vue -->
		<div :style="{fontSize:postFontSize + 'em' }">
				<p>This text will increases</p>
			
		<my-sample-click v-for="item in postData" v-bind:post="item" :key="item.id" v-on:enlarge-text="postFontSize += 0.1"></my-sample-click>
		<!-- clickable button from vue ended -->
		
		</div>


	</div>
</div>
	<div id="dynamic">
		<!-- tabbed component in view -->
			<button 
				v-for="tab in tabs"
				v-bind:key="tab"
				v-bind:class="['tab-button',{active:currentTab === tab}]"
				v-on:click="currentTab=tab"

			>@{{tab}}</button>
			<component
				v-bind:is="currentTabComponent"
				class = "tab"
			>
				
			</component>


			<!-- tabbed component in view ended -->

	</div>
	<script type="text/javascript">
		Vue.component('blog-post',{
			props:['title','myclass'],
			template:'<div class="blog post"> <h1>@{{title}}</h1> </div>'
		})
		Vue.component('my-sample-click',{
			props:['post'],
			template:`<div class="my">
				<h3>@{{post.title}}</h3>
				<button @click="$emit('enlarge-text')">Enlarge text</button>
				
			</div>`
		})

		Vue.component('alert-box',{
			template:`<div class="alert-box-demo">
				<strong>Error occured</strong>
				<slot></slot>

			</div>`
		})
		Vue.component('tab-home',{
			template:`<div>Home component</div>`
		})
		Vue.component('tab-posts',{
			template:`<div>Posts component</div>`
		})
		Vue.component('tab-archive',{
			template:`<div>Archive component</div>`
		})
		var app = new Vue({
			el:'#app',
			data:{
				 postFontSize:1,
				postData:[
				{id:0,text:'Evan'},
				{id:0,text:'you'},
				{id:0,text:'awesome'}
				]
			},
			methods:{
				enlarge:function(){
					alert('hello')
				}
			}
		})

		var dynamic = new Vue({
			el:'#dynamic',
			data:{
				currentTab:"Home",
				tabs:['Home','Posts','Archive']
			},
			computed:{
				currentTabComponent:function(){
					return 'tab-' + this.currentTab.toLowerCase()
				}
			}
		})
	</script>

</body>
</html>