@extends('layout')

@section('content')
    <div class="container">
        @foreach($users as $user)
            <h4> {{ $user->username }} </h4>
        @endforeach
    </div>
<div>
    {{ $users->links() }}
</div>
@stop