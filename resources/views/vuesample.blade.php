<!DOCTYPE html>
<html>
<head>
    <title>vue example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="js/app.js"></script>
</head>
<body>
    <div id="app">
        <p>@{{ok}}</p>
        <button @click='okk()'>Click to append</button>
        <ol id="appendLi"></ol>
    </div>
   
<script type="text/javascript">
    var app = new Vue({
        el:'#app',
        data:{ok:'ok man'},
        methods:{
            okk:function()
            {
               axios.post('axios-example')
               .then((response)=>{
                $('#appendLi').append('<li>'+ response.data + '</li>');
                
               })
               .catch(function(error){
                console.log(error);
               })
            }
        }
    });
</script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</body>

</html>