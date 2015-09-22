'use strict';

var wpNew = angular.module('wpNew', ['ngRoute', 'ngResource']);

wpNew.config(function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'wp-content/themes/ascent/views/home.php',
		controller: 'HomeCtrl'
	})
	.when('/about', {
		templateUrl: 'views/about.html',
		controller: 'AboutCtrl'
	})
	.otherwise({
		redirectTo: '/'
	});
});