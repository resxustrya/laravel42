@extends('layout')

@section('content')
    <div class="container">
        @foreach($users as $user)
            {{ $user->email }}
            <br />
        @endforeach
    </div>
    
    {{ $users->links() }}
@stop