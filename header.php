<!DOCTYPE>
<html ng-app="myApp">
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.7/angular-material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ngMask/3.1.1/ngMask.min.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.11.2/angular-material.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
	md-toolbar, md-toolbar a {
		color: #fff;
		text-decoration: none;
	}
	.card-media {
  		background-color: #999999; 
	}
</style>
<header ng-controller="menuController">
	<md-toolbar class="md-toolbar-tools">
		<md-button class="menu-icon nornal-btn" ng-click="toggleRight()">
			<md-tooltip>Меню</md-tooltip>
			<md-icon ng-bind="'menu'"></md-icon>
		</md-button>
		Передовые решения на 1C-Bitrix
	</md-toolbar>
	<md-toolbar>
		<div class="md-toolbar-tools">
			<h1>Разработанные модули</h1>
		</div>
	</md-toolbar>
	<md-sidenav class="md-sidenav-left" md-component-id="left">
		<md-content>
			<md-list flex>
				<md-subheader class="md-no-sticky" ng-click="toggleRight()">
					<md-tooltip>Свернуть меню</md-tooltip> 
					<md-icon ng-bind="'close'"></md-icon>
				</md-subheader>
				<md-list-item>
					<a href="/">Пункт 1</a>
				</md-list-item>
				<md-list-item>
					<a href="/">Пункт 1</a>
				</md-list-item>
			</md-list>
		</md-content>
	</md-sidenav>
</header>
<script>
	var app = angular.module('myApp', ['ngMaterial', 'ngMask']);
	app.config(function($mdThemingProvider) {
		// "red", "pink", "purple", "deep-purple", "indigo", "blue", "light-blue", "cyan", "teal", "green", "light-green", "lime", 
		// "yellow", "amber", "orange", "deep-orange", "brown", "grey", "blue-grey"
		$mdThemingProvider.theme('default')
			//.dark();
			.primaryPalette('deep-purple')
			.accentPalette('orange');
			//.backgroundPalette('blue');
	});
	app.controller('menuController', function($scope, $timeout, $mdSidenav) {
		$scope.toggleRight = function () {
			$mdSidenav('left').toggle();
		};
	});
</script>