//Declaring the angular app module
var app = angular.module("postApp", ['ngResource', 'ngRoute']);

//Configurin the angular routes
app.config(postRouter);

//Route function postRouter
function postRouter($routeProvider) {
	$routeProvider
		.when('/',
			{
				template: "Posts",
				controller: "postCtrl"
			}
		);
};

//Creating an angular service
app.factory('postService', function($resource) {

	return {
		posts : $resource('http://localhost/cakephp-angularjs/api/posts/getposts.json'),
		posts2 : ['hello', 'bello', 'pokemon'],
	}
});