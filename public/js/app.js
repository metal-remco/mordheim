var mordheimApp = angular.module('mordheimApp', ['userController', 'userService', 'ngRoute']);

mordheimApp.config(['$routeProvider',
function($routeProvider) {
  $routeProvider

  .when('/users', {
    templateUrl : 'users.html',
    controller : 'userController'
  });
}]);
