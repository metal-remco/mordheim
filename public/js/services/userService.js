angular.module('userService', [])

.factory('User', function($http) {

  return {
    get : function() {
      return $http.get('/api/v1/users');
    }
  }

});
