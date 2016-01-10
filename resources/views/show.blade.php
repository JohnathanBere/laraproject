@extends('layouts.app')
@section('title')
    {{ $task_name }}
@stop

@section('content')
    <h1>{{ $task_name }}</h1>
@stop