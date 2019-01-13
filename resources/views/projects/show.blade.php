@extends('layout')
@section('content')
<h1 class="title">{{ $project->title }}</h1>
<div class="content">
	{{ $project->description }}
</div>

<?php $tasks=$project->tasks; ?>
@if($tasks->count())
<h2>Tasks:</h2>
<div>
	
	@foreach($tasks as $task)
		<form method="POST" action="/tasks/{{ $task->id }}">
			@method('PATCH')
			@csrf
			<label class="checkbox" for="completed">
				<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed?'checked':''}}>
				{{ $task->description }}
			</label>
		</form>
	@endforeach
</div>
<div>
	
	<form class="box" method="POST" action="/projects/{{ $project->id }}/tasks">

		@csrf
		
		<div class="field">
			<label class="label" for="description">New task</label>
			
			<div class="control">
				<input type="text" class="input" name="description" placeholder="New task">
			</div>

		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Add task</button>
			</div>
		</div>
		
		@include('errors')

	</form>
</div>

@endif
<a href="/projects/{{ $project->id }}/edit">Edit project</a>
@endsection