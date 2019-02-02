<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container">
		<form method="post" action="api/register">
			{{csrf_field()}}
		<label>Name</label>
		<input type="text" name="name" placeholder="Type your name">
		<label>Email</label>
		<input type="email" name="email" placeholder="Type your email">
		<label>Password</label>
		<input type="password" name="password" placeholder="Type your password ">
		<input type="submit" value="submit">
		</form>
	</div>

</body>
</html>