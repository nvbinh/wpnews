'use strict';

wpNew.controller('HomeCtrl', ['$scope', 'Posts', function($scope, Posts) {
	Posts.getPosts().then(function(data) {
		console.log(data);
		$scope.posts = data;
	});
}]);
