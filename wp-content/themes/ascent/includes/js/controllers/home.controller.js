'use strict';

wpNew.controller('HomeCtrl', ['$scope', 'Posts', function($scope, Posts) {
	Posts.getPosts().then(function(data) {
		$scope.posts = data;	
	});
}]);
