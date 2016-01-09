@extends('layouts.app')
@section('title')
    Edit Article
@stop

@section('content')

    @include('errors.list')

    <h2>Edit {{ $article->title }}</h2>
    {!! Form::model($article, ['method' => 'PUT', 'url' => 'articles/' . $article->id]) !!}
        @include('articles._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}
@stop