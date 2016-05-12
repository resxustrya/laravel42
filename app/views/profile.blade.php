

@extends('layout')

@section('content')
    <h2>HI, {{ $employee->firstname." ,". $employee->lastname }} </h2>
    <a href='{{ URL::action('HomeController@userlogout') }}'>Logout</a>
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
        setTimeout(checkAuth,50);
    </script>
    <script>
        
    </script>
@stop