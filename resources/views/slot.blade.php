<!DOCTYPE html>
<html>
<head>
	<title>Slot example in view</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<div id="app">
		<p ref="testPara" id="para"></p>
		<slot-example>
			<template slot='header'><p style="color:red">Red</p></template>
			<template slot='footer'><p style="color: blue">Blue</p></template>
		</slot-example>
		
	</div>
	<script type="text/javascript">
		Vue.component('slot-example',{
			template:
			`<div>
				<slot name='header'></slot>
				<slot name='footer'></slot>

			</div>`
		})
		var app = new Vue({
			el:'#app',
			mounted(){
				alert(this.$refs.id)
			}

		})
	</script>

</body>
</html>