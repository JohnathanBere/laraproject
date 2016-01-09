@extends('layouts.app')
@section('title')
    Articles
@stop

@section('content')
    <h1>Some articles fam</h1>
    @foreach($articles as $article)
        <article>
            <h2><a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a></h2>
            <div class="well">{{ $article->body }}</div>
        </article>
    @endforeach
@stop