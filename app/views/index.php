<!DOCTYPE html>
<html>
  <head>
    <title>Mordheim roster</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>

    <script src="js/controllers/mainCtrl.js" type="text/javascript"></script>
    <script src="js/services/userService.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
  </head>
  <body class="container" ng-app="userApp" ng-controller="mainCtrl">
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

    <div class="user" ng-hide="loading" ng-repeat="user in users">
        <h3>User: <a href="api/v1/users/{{ user.username }}">{{ user.username }}</a></h3>
        <p>Warband name: {{ user.warbandname }}</p>
        <p>Rating: {{ user.rating }}</p>
    </div>
  </body>
</html>
