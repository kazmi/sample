<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<h1>Funny Jokes</h1>

	<ul>
	@foreach($jokes as $joke)
		<li>{{ $joke->content }}</li>
	@endforeach
	</ul>

	<form method="POST" action="/about/store">
		{{ csrf_field() }}
		<label for="firstName">
			Write a Joke
			<input type="text" name="firstName">
		</label>

		<button type=submit>Save Joke</button>
	</form>


</body>
</html>
