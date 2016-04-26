

@extends('layout')

@section('content')
    <div class="container-fluid">
       <div class="parallax-container">
           <div class="parallax">
               <img src="{{ asset('uploads/Flower-Bouquet.jpg') }}" />
           </div>
           <div class="container">

           </div>
       </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <h1>This is from home</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="parallax-container">
            <div class="parallax">
                <img src="{{ asset('uploads/Date-a-programmer.png') }}" />
            </div>
        </div>
    </div>
@stop