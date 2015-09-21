'use strict';

var wpNew = angular.module('wpNew', ['ngRoute']);

wpNew.config(function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'views/home.php',
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