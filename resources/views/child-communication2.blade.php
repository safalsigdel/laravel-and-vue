<!DOCTYPE html>
<html>
<head>
	<title>Child communication using event</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="app">
		<!-- here userclick event is fired by chlid element  -->
		<!-- created method handle this event  -->
		<!-- created method executes when vue instance is loaded  -->
		<!-- so no need to write fucntion on click -->
		<event-example @userclick>
			
		</event-example>
		<h5 v-if="buttonClicked">@{{content}}</h5>
		
	</div>
	<script type="text/javascript">
		window.Event = new Vue();

		Vue.component('event-example',{
			template:`<div><button @click="clicked">CLick</button></div>`,
			methods:{
				clicked(){
					Event.$emit('userclick')

				}
			}

		})
		var app = new Vue({
			el:'#app',
			data:{
				buttonClicked:false,
				content:'First click'

			},
			methods:{
				// clickEventOccur(){
				// 	alert('click')
				// }

			},
			created(){
				Event.$on('userclick',()=>{
					if (this.buttonClicked==false) {
					this.buttonClicked = true;	
					this.content = 'First click'
				}else{
					if (this.content = 'First click') {
					this.content = 'Second click'
				}else{
					this.content = 'Second click'
				}
				}
				})
			}

		})
	</script>

</body>
</html>