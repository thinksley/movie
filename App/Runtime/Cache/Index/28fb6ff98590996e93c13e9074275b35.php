<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" ng-app="movieApp">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />

	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
	<script src="__PUBLIC__/bower_components/jquery/dist/jquery.js"></script>
	<script src="__PUBLIC__/bower_components/angular/angular.js"></script>
	<script src="__PUBLIC__/bower_components/angular-animate/angular-animate.js"></script>
	<script src="__PUBLIC__/bower_components/angular-route/angular-route.js"></script>
	<script src="__PUBLIC__/bower_components/angular-resource/angular-resource.js"></script>
	
</head>
<body>
  <div class="view-container">
    <div ng-view class="view-frame"></div>
  </div>


<script type="text/javascript">
var movieApp = angular.module('movieApp', ['ngRoute','ngResource']);

movieApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/movies', {
        templateUrl: 'antpl/list.html',
        controller: 'MovieListCtrl'
      }).
      when('/movies/:movieId', {
        templateUrl: 'antpl/detail.html',
        controller: 'MovieDetailCtrl'
      }).
      otherwise({
        redirectTo: '/movies'
      });
  }]);	

movieApp.controller('MovieListCtrl',['$scope','$location','$resource',function($scope,$location,$resource){

	var objRe = $resource( 'http://localhost/movie/index.php/index/Index/getMovieList',{},{});
	$scope.data = objRe.query();
	
}]);

movieApp.controller('MovieDetailCtrl',['$scope','$location','$resource','$routeParams',function($scope,$location,$resource,$routeParams){

	var objRe = $resource( 'http://localhost/movie/index.php/index/Index/getMovieDetail/movies/'+$routeParams.movieId,{},{});
	$scope.data = objRe.query();
	
}]);

</script>
</body>
</html>