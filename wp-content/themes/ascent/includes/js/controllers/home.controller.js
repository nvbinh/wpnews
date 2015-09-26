'use strict';

wpNew.controller('HomeCtrl', ['$scope', 'Posts', function($scope, Posts) {
	if (opt) {
		$scope.opt = opt;
	}

	Posts.getPosts().then(function(data) {
		console.log(data);
		$scope.posts = data;

		/* Owl carousel */
	    if (jQuery('#home-slider .main-owl-carousel').length) {
	        jQuery(".main-owl-carousel").owlCarousel({
	            navigation: true,
	            pagination: false,
	            responsive: true,
	            items: 1,
	            touchDrag: true,
	            navigationText: false,
	            mouseDrag: true,
	            itemsDesktop: [3000, 1],
	            itemsDesktopSmall: [1440, 1],
	            itemsTablet: [1024, 1],
	            itemsTabletSmall: [600, 1],
	            itemsMobile: [360, 1],
	            autoPlay: true,
	            autoHeight: true,
	        });
	    }
	});
}]);
