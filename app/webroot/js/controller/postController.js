app.controller('postCtrl', function($scope, postService){

	$scope.posts = postService.posts.query([], isArray = true);
	$scope.postss = postService.posts2;
});