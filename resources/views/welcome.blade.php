@extends('layout')
@section('title')
First page
@endsection

@section('content')

<h1>Welcome to my first page {{ $name }}</h1>

<ul>
    
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach

</ul>

@endsection