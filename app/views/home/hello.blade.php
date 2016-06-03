

@extends('layout')

@section('sidebar')
    @parent
    <h2>This is appended to the sidebar to the layout from the hello</h2>
@stop

@section('content')
    {{ $message.", ".$name }}
@stop