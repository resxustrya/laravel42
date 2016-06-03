
@extends('home.layout')

@section('content')
    <div class="container">
        {{ Form::open(array('method' => 'POST', 'files' => true)) }}
        {{ Form::file('image') }}
        {{ Form::submit('Upload') }}
        {{ Form::close() }}
    </div>
@stop