'use strict';

wpNew.factory('Posts', ['$http', function($http) {
	return {
		getPosts: function() {
			var response = $http.get('wp-json/posts').then(function(response) {
				return response.data;
			});

			return response;
		}
	};
}]);