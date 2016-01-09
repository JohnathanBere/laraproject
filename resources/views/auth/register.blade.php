@extends('layouts.app')
@section('title')
    Register
@stop
@section('content')
    {!! Form::open(['url' => '/auth/register']) !!}

    <div class="form-group">
        {!! Form::label('name', "Name:") !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', "Email:") !!}
        {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', "Password:") !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', "Confirm Password:") !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Register', ['class' => 'form-control btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
@stop
