

@extends('layout')

@section('content')
    <h2>HI, {{ Auth::user()->email }} </h2>
    <a href='/logout'>Logout</a>
    <script>
        function checkAuth() {
            $.ajax({
               url : 'authcheck',
               success : function(data) {
                   if(data ==1){
                       window.location = '/login';
                   }
               }
            });
        }
        setTimeout(checkAuth,1000);
    </script>
@stop