<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="{{ secure_asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('bower/bootstrap/dist/css/bootstrap.min.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    @include('includes.navbar')

    <div class="jumbotron" style="height: 60vh;">

    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3" ng-repeat="n in [1, 2, 3, 4]">
          <div class="thumbnail">
            <div class="caption"><h4>Section number @{{ n }}</h4></div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="{{ secure_asset('bower/angular/angular.min.js') }}"></script>
  </body>
</html>
