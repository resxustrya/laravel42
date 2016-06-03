

@extends('layout')

@section('content')
    <div ng-app="myApp">
        <form>
            <input type="text" ng-model="name" name="name" />
        </form>
        <h1 ng-bind="name">Hi [[ name ]]</h1>
        <h1> [[ name ]]</h1>
    </div>

    <script type="text/javascript">
        var sampleApp = angular.module('myApp', [], function($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });
        sampleApp.controller('');
    </script>
@stop