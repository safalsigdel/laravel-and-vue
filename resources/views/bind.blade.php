<!DOCTYPE html>
<html>
<head>
    <title>Vue binding</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script type="text/javascript" src="js/app.js"></script>
</head>
<body>
    <div id="app">
        <div v-bind:class="{'alert alert-danger':isActive,'alert alert-success':isActiveSu}">
          <p>Hello vue</p>
        </div>
        <input type="text" name="check" v-model='check' v-on:keyup='checkValue()'>
        <!-- templete element group other element in which we can apply loop or other condition -->
        <template v-if='ok'>
        <p>Hello here is me </p>
        <p>This is true part of if loop</p>
        <p>when input type is 1 then this is shown</p>
        </template>
        <template v-else>
        <p>Hello this is else part </p>
        <p>This is false part of if loop</p>
        <p>when input type is 2 then this is shown</p>
        </template>

        <!-- this part is controlling resuability of vue with the help of key -->
        <template v-if="loginType=='username' ">
          <label>Username</label>
          <input placeholder="Type username" key='username'>
        </template>
        <template v-else>
          <label>Email</label>
          <input placeholder="Type your email" key='email'>
        </template>
        <button @click='toggleLogin()'>Toggle login</button>
        <!-- array example in vue -->
        <ul>
          <li v-for="(names,key,index) in Name">@{{index}} @{{key}}: @{{names.Name}}</li>
        </ul>
        <input @keyup.enter='enterF()'>
    </div>
   
<script type="text/javascript">
    var app = new Vue({
        el:'#app',
        data:{isActive:'',isActiveSu:'',
            check:'',
            ok:'',
            loginType:'username',
            Name:[
              {Name:'Safal Sigdel'},
              {Name:'Ram sharma'},
              {Name:'Hari sigdel'}
            ]
        },
        methods:{
          checkValue:function(){
            if (this.check=='1') {
              this.isActiveSu=true
              this.isActive=false
              this.ok=true
            }if(this.check=='2'){
              this.isActive=true
              this.isActiveSu=false
              this.ok = false
            }
          },
          toggleLogin:function(){
              if (this.loginType=='username') {
                this.loginType='email'
              }else{
                this.loginType='username'
              }
          },
          enterF:function()
          {
            alert('enterF function hitted')
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