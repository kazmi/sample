<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<h1>About</h1>

	<form method="POST" action="/about/store">
		{{ csrf_field() }}
		<label for="firstName">
			<input type="text" name="firstName">
		</label>
	</form>


</body>
</html>
