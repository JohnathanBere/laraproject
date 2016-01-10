@extends('layouts.app')
@section('title')
    Create Task
@stop

@foreach($errors->all() as $error)
    <p> {{ $error }}</p>
@endforeach

@section('content')
    <h1>Create a task</h1>
    {!! Form::open(['action' => 'TaskController@store']) !!}

    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'form-control btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
@stop



