angular.module('mainCtrl', [])

.controller('mainCtrl', function($scope, $http, User)
{
  $scope.userData = {};

  $scope.loading = true;

  User.get()
    .success(function(data, status, headers, config) {
      console.log(data);

      // $.each(data, function() {
      //   var test = data;
      //   console.log(test.users[0]);
      // });
      $scope.users = data.users;
      $scope.loading = false;
    })
    .error(function(data, status, headers, config) {
        console.log(config);
    })


});
