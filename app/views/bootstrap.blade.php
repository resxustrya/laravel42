<!DOCTYPE html>
<html ng-app="todoApp">
    <head>
        <title>MaidFinder PH</title>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="cache-control" content="no-store" />
        <meta http-equiv="cache-control" content="must-revalidate" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap-theme.min.css')}}" />
        <link href="{{ asset('materialize/css/icons.css')}}" type="text/css" rel="stylesheet">
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/angular.min.js')}}"></script>
        <style>
        </style>
    </head>
    <body ng-controller="TodoController">
        <div class="container">
            
        </div>
        <script type="text/javascript" src="{{ asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript">

                    (function () {
                        'use strict';


                        var app = angular.module('todoApp', [], function ($interpolateProvider) {
                            $interpolateProvider.startSymbol('<<');
                            $interpolateProvider.endSymbol('>>');
                        });

                        app.controller('TodoController', function ($scope, $http) {
                            $http.get('/alluser').success(function (data) {
                                $scope.todo = data;
                                $scope.length = $scope.todo.length;
                            });
                        });
                    })();

        </script>
    </body>
</html>