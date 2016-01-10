@extends('layouts.app')

@section('title')
    {{ $heading }}
@stop

@section('content')
    @if($tasks)
        <ul>
            @foreach($tasks as $task)
                <li><a href="/task/{{ $task->id }}"> {{  $task->name }} </a></li>
            @endforeach
    </ul>
    @else
        <p>No available tasks!</p>
    @endif
@stop