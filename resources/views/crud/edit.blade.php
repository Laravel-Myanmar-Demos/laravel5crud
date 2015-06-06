<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h1>Edit {!! $crud->title !!}</h1>
	<hr>

	{!! Form::model($crud, ['method' => 'PATCH', 'url' => 'crud/' . $crud->id]) !!}
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