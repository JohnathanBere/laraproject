@extends('layouts.app')
@section('title')
    Edit Task
@stop

@foreach($errors->all() as $error)
    <p> {{ $error }}</p>
@endforeach

@section('content')
    <h1>Edit a task</h1>
    {!! Form::open(array('action' => ['TaskController@update', $task->id], 'method' => 'POST')) !!}

    <div class="form-group">
        {!! Form::text('name', $value = $task->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'form-control btn btn-success']) !!}
    </div>

    {!! method_field('PUT') !!}

    {!! Form::close() !!}
@stop