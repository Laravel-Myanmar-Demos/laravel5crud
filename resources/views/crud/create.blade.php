<html>
<head>
	<title>Create</title>
</head>
<body>
	<h1>Create</h1>
	<hr>
	{!! Form::open(['url' => 'crud']) !!}
		{!! Form::label('title') !!}
		{!! Form::text('title') !!}
		<br><br>
		{!! Form::label('body') !!}
		<br><br>
		{!! Form::textarea('body') !!}
		<br><br>
		<input type="submit" value="Submit">
	{!! Form::close() !!}
</body>
</html>