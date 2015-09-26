'use strict';

/*
* Convert string to HTML filter
*/
wpNew.filter('sanitize', ['$sce', function($sce) {
	return function(htmlCode) {
		return $sce.trustAsHtml(htmlCode);
	};
}]);