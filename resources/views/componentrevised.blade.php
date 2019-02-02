<!DOCTYPE html>
<html>
<head>
	<title>Component in detail</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="apps">
		<button v-on:click="changeData('home')">Home</button><button @click="changeData('post')">Post</button><button @click="changeData('blog')">Blog</button>
		<component v-bind:is="changeComponent">
			
		</component>
	</div>
<script type="text/javascript">
	Vue.component('home',{
		template:`<div><p>Home view</p><p>Home view</p><p>Home view</p><p>Home view</p></div>`

	})
	Vue.component('post',{
		template:`<div><p>Post view</p><p>Post view</p><p>Post view</p><p>Post view</p></div>`
	})
	Vue.component('blog',{
		template:`<div><p>Blog view</p><p>Blog view</p><p>Blog view</p><p>Blog view</p></div>`
	})
	var app = new Vue({
		el:'#apps',
		data:{
			check:"home",
		},
		methods:{
			changeData:function(arg){
				this.check=arg;
			}
		},
		computed:{
			changeComponent:function(){
				return this.check;
			}
		}
	})
</script>
</body>
</html>