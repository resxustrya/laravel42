

@extends('home.layout')

@section('content')
    <div class="container">
        <div calss="container-fluid">
            <div class="row">
                <div class="col s12 m4 12">
                    <h2>Search Results for "Nanay"</h2>
                    <h4>20,000 Results</h4>
                </div>
            </div>
           <div class="row" style="border: 1px solid azure;">
               @for($i = 0; $i < 20; $i++)
                   <div class="col s12 m4 12">
                       <div class="card">
                           <div class="card-image waves-effect waves-block waves-light">
                               <img class="activator" src="{{asset('uploads/Flower-Bouquet.jpg')}}">
                           </div>
                           <div class="card-content">
                               <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                               <p><a href="#">This is a link</a></p>
                           </div>
                           <div class="card-reveal">
                               <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                               <p>Here is some more information about this product that is only revealed once clicked on.</p>
                           </div>
                       </div>
                   </div>
               @endfor
           </div>
        </div>
    </div>
@stop