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
		<button v-bind:data-target="my" data-toggle="modal" >Show Modal</button>
		<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	</div>
	<script type="text/javascript">
		var app = new Vue({
			el:'#app',
			data:{
				my:'#myModal'
			}
		})
	</script>
</body>
</html>