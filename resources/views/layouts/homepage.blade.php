<!DOCTYPE html>
<html lang="en" ng-app="zardify">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') # zardify</title>

    <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body ng-controller="homepageController">

    @include('partials.navbar')

    <div class="jumbotron banner">
      <div class="row">
        <div class="col-md-4">
          <h1></h1>
        </div>
        <div class="col-md-4">
          <br /><img class="pixel-logo" src="{{ secure_asset('img/ana.png') }}" alt="Pixel Art Self">
        </div>
        <div class="col-md-4">
          <h4></h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3" ng-repeat="item in posts">
        <div class="thumbnail thumbnail-homepage">
          <div class="caption">
            <h4>
              @{{ item.title }}
              <br />
              <small>in @{{ item.category }}</small>
            </h4>
          </div>
          <img src="img/posts/sample@{{ $index }}.jpg" alt=""><br>
          <p class="description">
            @{{ text_wrap(item.body_en); }} <strong>Continue reading</strong>
          </p>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
  </body>
</html>
