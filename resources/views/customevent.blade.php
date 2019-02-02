<!DOCTYPE html>
<html>
<head>
	<title>Modal using view</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<script type="text/javascript" src="js/app.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="app">
    <laptop @laptop-event='produce' v-bind:text="Dell">
      
    </laptop>
    
  </div>
  <script type="text/javascript">
    Vue.component('laptop',{
      props:['text'],
      template:`<div>
        <h1>@{{text}}</h1>
        <button @click="$emit('laptop-event')">Click</button>

      </div>`
    })
    var app = new Vue({
      el:'#app',
      data:{
        Dell:'Dell 3421'
      },
      methods:{
        produce(){
          alert('hello')
        }
      }
    })
  </script>

</body>
</html>