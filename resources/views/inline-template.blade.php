<!DOCTYPE html>
<html>
<head>
	<title>Inline template</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="app">
		<sample-component inline-template>
			<div class="info">

				<button @click='per=per+5'>@{{name}}</button>
				<p>Percentage: @{{per}}</p>
			</div>
			
		</sample-component>
		
	</div>
	<script type="text/javascript">
		Vue.component('sample-component',{
			data(){
				return {name:'Click',per:50}
			},
			methods:{
				update(){
					app.clickOccur();
					
				}
			}
		})
		var app = new Vue({
			el:'#app',
			methods:{
				clickOccur()
				{
					
				}
			}

		})
	</script>

</body>
</html>