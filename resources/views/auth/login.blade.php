@extends('layouts.app')
@section('title')
    Login
@stop
@section('content')
    {!! Form::open(['url' => '/auth/login']) !!}
        <div class="form-group">
            {!! Form::label('email', "Email:") !!}
            {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', "Password:") !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('remember', "Remember Me:") !!}
            {!! Form::checkbox('remember', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'form-control btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
@stop
