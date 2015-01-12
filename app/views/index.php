<!DOCTYPE html>
<html ng-app="mordheimApp">
  <head>
    <title>Mordheim roster</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

    <script src="js/controllers/userController.js" type="text/javascript"></script>
    <script src="js/services/userService.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
  </head>
  <body class="container">
    <header>
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">Mordheim roster</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#users"><i class="fa fa-shield"></i> Users</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    <div class="main">
      <div ng-view=""></div>
    </div>
  </body>
</html>
