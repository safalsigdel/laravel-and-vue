<!DOCTYPE html>
<html>
<head>
	<title>Access control using gate and policy</title>
</head>
<body>
	@can('isSafal')
	<p>This content is for safal</p>
	@endcan
	@can('isRam')
	<p>This content is for ram</p>
	@endcan

</body>
</html>