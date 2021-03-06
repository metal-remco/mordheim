angular.module('userController', [])

.controller('userController', function($scope, $http, User)
{
  $scope.userData = {};

  $scope.loading = true;

  User.get()
    .success(function(data, status, headers, config) {
      console.log(data);
      $scope.users = data.users;
      $scope.loading = false;
    })
    .error(function(data, status, headers, config) {
        console.log(config);
    })


});
