<html>
<head>
    <title>Hello view</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>

<div id="app">
    <p>@{{ message }}</p>
    <button @click="buttonClick">Click</button>
</div>

<div id="app2">
    <p :title="title">Hover here to see title</p>
    <p :title="title">Hello vue</p>
</div>

<div id="app3">
    <p :style="style">Background color test</p>
    <button @click="changeColor">Click to change color</button>
</div>

<div id="app4">
    <p v-if="seen">This is seen paragraph</p>
</div>

<div id="app5">
    <ol>
        <li v-for="frameworkName in framework">@{{frameworkName.text}}</li>
    </ol>
    <ul>
        <li v-for="personName in names">@{{personName}}</li>
    </ul>
</div>

<div id="app6">
    <input type="text" v-model="app6Text">
    <p>@{{app6Text}}</p>

    <my-component title="This is my first component" name="my component name"></my-component>
</div>

{{--computed property example started--}}
<div id="app7">
<p>Original message @{{message}}</p>
    <p>Reversed message using computed property @{{ reversedMessage }}</p>
</div>


<script>
    //custom component
    Vue.component('my-component',{
        props:['title','name'],
        template:'<h3>@{{title}}@{{name }}</h3>'
    })

    Vue.component('content',{
        template:`
            <div style="background-color:red">Content component</div>
        `
    });
    var app = new Vue({
        el:'#app',
        data:{message:'Hello vue'},
        methods:{
            buttonClick() {
                alert('button is clicked');
            }
        }

    });
    var app2 = new Vue({
        el:'#app2',
        data:{title:'I am paragraph'}
    });

    var app3 = new Vue({
        el:'#app3',
        data:{
            style:'color:red'
        },
        methods:{
            changeColor() {
                this.style='color:green'
            }
        }

    });
    var app4 = new Vue({
        el:'#app4',
        data:{seen:true}
    });

    var app5 = new Vue({
        el: '#app5',
        data:{
            framework:[
                {text:'Laravel'},
                {text:'Symphony'},
                {text:'CI'}
            ],
            names:['Ram','Shyam','Hari']
        }
    });

    var app6 = new Vue({
        el: '#app6',
        data:{
            app6Text: ''


        }
    });
    var app7 = new Vue({
        el: '#app7',
        data:{
            message:'without computed',
        },
        mounted() {
            console.log(navigator.appVersion);
        },
        computed:{
            reversedMessage:function () {
                return this.message.split('').reverse().join('');
            }  
        }
    });


</script>
</body>
</html>