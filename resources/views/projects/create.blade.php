@extends('layout')
@section('title')
Create new project
@endsection
@section('content')
<h1 class="title">Create new project</h1>

<form method="POST" action="/projects" style="margin-bottom: 1em;">
	@csrf
	<div class="field">
		<label class="label" for="title">Title</label>
		<div class="control">
			<input type="text" class="input {{ $errors->has('title')?'is-danger':''}}" name="title" placeholder="Title" value="{{ old('title') }}">
		</div>
	</div>
	<div class="field">
		<label class="label" for="description">Description</label>
		<div class="control">
			<textarea name="description" class="textarea {{ $errors->has('title')?'is-danger':''}}">{{ old('description')  }} </textarea>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Create Project</button>
		</div>
	</div>
</form>

@include('errors')

<!-- <form method="POST" action="/projects">
	
	{{ csrf_field() }}
	<div>
		
		<input type="text" name="title" placeholder="Project title">

	</div>

	<div>
		
		<textarea name="description" placeholder="Project description"></textarea>
	</div>

	<div>
		<button type="submit">Create projects</button>
	</div>
</form> -->
@endsection