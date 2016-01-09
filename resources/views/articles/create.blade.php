@extends('layouts.app')
@section('title')
    Create Broadcast
@stop

@section('content')

    @include('errors.list')


    <h2>Create Article</h2>
    {!! Form::open(['url' => 'articles']) !!}
        @include('articles._form', ['submitButtonText' => 'Add Broadcast'])
    {!! Form::close() !!}
@stop