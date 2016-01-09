@extends('layouts.app')

@section('title')
    About us
@stop

@section('content')
    <h1>About {{ $first  }} {{ $last }}</h1>
@stop

@section('footer')
    {{-- &copy; {{ date('Y') }} John --}}
@stop
