@extends('layouts.app')
@section('title')
    Create Article
@stop

@section('content')

    @include('errors.list')


    <h2>Create Article</h2>
    {!! Form::open(['url' => 'articles']) !!}
        @include('articles._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}
@stop