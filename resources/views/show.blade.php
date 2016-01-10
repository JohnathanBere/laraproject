@extends('layouts.app')
@section('title')
    {{ $task->name }}
@stop

@section('content')
    <h1>{{ $task->name }}</h1>
    <p>Date created: {{ date('d F Y', strtotime($task->created_at)) }}</p>
@stop