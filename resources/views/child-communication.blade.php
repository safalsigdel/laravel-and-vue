<!DOCTYPE html>
<html>
<head>
	<title>Child communication</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="app">
		<my-input @applied="applied">
			
		</my-input>
		<h1 v-if="isApplied">Coupon applied</h1>
		
	</div>

	<script type="text/javascript">
		Vue.component('my-input',{
			template:`<div><input placeholder="Type some text herer" @keyup.enter="onCouponApplied"></div>`,
			methods:{
				onCouponApplied(){
					this.$emit('applied');
				}
			}
		})
		var app = new Vue({
			el:'#app',
			data:{
				isApplied:false,

			},
			methods:{
				applied(){

					this.isApplied = true;

				},
			}

		})
	</script>

</body>
</html>