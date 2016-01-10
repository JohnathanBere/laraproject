@extends('layouts.app')

@section('title')
    {{ $heading }}
@stop

@section('content')
    <h1>{{ $heading }}</h1>
    <nav>
        <li><a href="/task">Home</a></li>
        <li><a href="/task/create">Make a new task</a></li>
    </nav>
    @if($tasks)
        <ul>
            @foreach($tasks as $key => $task)
                <li><a href="/task/{{ $key  }}"> {{  $task }} </a></li>
            @endforeach
    </ul>
    @else
        <p>No available tasks!</p>
    @endif
@stop