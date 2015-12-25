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
	<!--sanitize 解析html标签-->
	<script type="text/javascript" src="//cdn.bootcss.com/angular.js/1.3.0-beta.13/angular-sanitize.js"></script>
	<script type="text/javascript">
	var username="<?php echo session('username');?>";
	</script>
</head>
<body>
	
	<div class="main-inner">
		<?php if(session('username')): ?><div style="margin:20px 0">
					<p>欢迎您！<?php echo session('username');?>&nbsp;&nbsp;<a href="<?php echo U(GROUP_NAME.'/User/logout');?>">退出</a></p>

			  </div>
		<?php else: ?>
			<div style="margin:20px 0">
				<a href="#/register">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#/login">登录</a>	
			</div><?php endif; ?>
	</div>
  
	<div class="view-container">
		<div ng-view class="view-frame"></div>
	</div>


<script type="text/javascript">
var movieApp = angular.module('movieApp', ['ngRoute','ngResource','ngSanitize']);

movieApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/movies', {
        templateUrl: '/movie/antpl/list.html',
        controller: 'MovieListCtrl'
      }).
      when('/movies/:movieId', {
        templateUrl: '/movie/antpl/detail.html',
        controller: 'MovieDetailCtrl'
      }).
      when('/register', {
        templateUrl: '/movie/antpl/register.html',
        controller: 'RegisterCtrl'
      }).
      when('/login', {
        templateUrl: '/movie/antpl/login.html',
        controller: 'LoginCtrl'
      }).
      otherwise({
        redirectTo: '/movies'
      });
  }]);	

movieApp.controller('MovieListCtrl',['$scope','$location','$resource',function($scope,$location,$resource){

	var objRe = $resource( '/movie/index.php/Index/Index/getMovieList',{},{});
	$scope.data = objRe.query();
	
}]);

movieApp.controller('MovieDetailCtrl',['$scope','$location','$resource','$routeParams','$http',function($scope,$location,$resource,$routeParams,$http){

	var objRe = $resource( '/movie/index.php/index/Index/getMovieDetail/movies/'+$routeParams.movieId,{},{});
	$scope.data = objRe.query();

	$scope.username=username;

	$http.get('/movie/index.php/index/Index/clickNum/id/'+$routeParams.movieId).success(function(data,state,headers,config){
		$scope.clickNum=data;
	});
	
}]);

movieApp.controller('CommentListCtrl',['$scope','$resource','$routeParams',function($scope,$resource,$routeParams){
	
	var objRe = $resource( '/movie/index.php/Index/Comment/getCommentList/aid/'+$routeParams.movieId,{},{});
	$scope.data = objRe.query();

}]);

movieApp.controller('AddCommentCtrl',['$scope','$http',function($scope,$http){
	$scope.add=function(){
		if(!$scope.comment){
			alert('请输入');
			return ;
		}
		$http.post('/movie/index.php/Index/Comment/add', {
                aid: $scope.data[0].id,
                username:username,
                comment: $scope.comment
                
            }).success(function(data){
                if(data.status==1){
                	$scope.comment='';
                }
            });
	}
	

}]);

</script>
</body>
</html>