@extends('layouts.app')
@section('title')
    {{ $task->name }}
@stop

@section('content')
    <h1>{{ $task->name }}</h1>
    <p>Date created: {{ date('d F Y', strtotime($task->created_at)) }}</p>
    <hr>
    <a href='/task/{{$task->id}}/edit'>Edit</a>
    <br>
    {!! Form::open(['method' => 'DELETE', 'route' => ['task.destroy', $task->id]])  !!}
    <div class="form-group">
        {!! Form::submit('Delete', ['class' => 'form-control btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
@stop