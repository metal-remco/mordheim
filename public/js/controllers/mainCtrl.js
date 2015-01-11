angular.module('mainCtrl', [])

.controller('mainCtrl', function($scope, $http, User)
{
  $scope.userData = {};

  $scope.loading = true;

  User.get()
    .success(function(data, status, headers, config) {
      console.log(data);
      $scope.users = data;
      $scope.loading = false;
    })
    .error(function(data, status, headers, config) {
        console.log(config);
    })


});
