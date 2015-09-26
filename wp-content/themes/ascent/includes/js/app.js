'use strict';

var wpNew = angular.module('wpNew', ['ui.router', 'ngResource']);

wpNew.config(function($stateProvider, $urlRouterProvider) {

	$urlRouterProvider.otherwise('/');

	$stateProvider
	.state('home', {
		url: '/',
		views: {
			'': {
				templateUrl: 'wp-content/themes/ascent/views/home.php',
				controller: 'HomeCtrl'
			},
			'viewCarousel': {
				templateUrl: 'wp-content/themes/ascent/views/carousel.php',
				controller: 'HomeCtrl'
			}
		}
	})
	.state('about', {
		url: '/about',
		templateUrl: 'views/about.html',
		controller: 'AboutCtrl'
	});
	// .otherwise({
	// 	redirectTo: '/'
	// });
});