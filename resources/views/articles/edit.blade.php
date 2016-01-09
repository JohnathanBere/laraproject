@extends('layouts.app')
@section('title')
    Edit Broadcast
@stop

@section('content')

    @include('errors.list')

    <h2>Edit {{ $article->title }}</h2>
    {!! Form::model($article, ['method' => 'PUT', 'url' => 'articles/' . $article->id]) !!}
        @include('articles._form', ['submitButtonText' => 'Update Broadcast'])
    {!! Form::close() !!}
@stop