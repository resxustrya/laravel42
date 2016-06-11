


@extends('landing.layout')

@section('content')

    <div class="container-fluid grey lighten-5">
        <div class="row">
            <div class="col s12">
                <div class="section no-pad-bot">
                    <div class="container-fluid">
                        <br><br>
                        <h1 class="header center teal-text text-lighten-2">Find the right pair of arms</h1>
                        <div class="row center">
                            <div class="col s12 m4 l2"><p>&nbsp;</p></div>
                            <div class="col s12 m4 l8">
                                <form action="search" action="POST">
                                    <select class="browser-default">
                                        <option value="" disabled selected>Choose your location</option>
                                        @for($i = 0; $i < 20; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </form>
                            </div>
                            <div class="col s12 m4 l2"><p>&nbsp;</p></div>
                        </div>
                        <div class="row center">
                            <a href="/search" id="download-button" class="btn-large waves-effect waves-light teal green darken-1">Search Profiles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('materialize/landing/background/background1.jpg') }}" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>
        </div>
    </div>
@stop