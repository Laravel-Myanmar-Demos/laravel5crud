<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h1>Yo! Read</h1>
	<hr>
	<a href="/crud/create">Create</a>
	<br><br>
	@if(count($cruds))
		@foreach($cruds as $crud)
			<h2>{!! $crud->title !!}</h2>
			<p>
			<a href="/crud/{!! $crud->id !!}/edit">Edit</a>
			{!! Form::open(['url' => 'crud/' . $crud->id, 'method' => 'delete']) !!}
				{!! Form::submit('Delete') !!}
			{!! Form::close() !!}
			</p>
		@endforeach
	@endif
</body>
</html>