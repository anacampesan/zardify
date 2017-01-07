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

  <body>

    @include('partials.navbar')

    <div class="jumbotron banner">
      <h1 class="logo-title">ZARDIFY<small>.com</small></h1>
      <h3 class="logo-subtitle">music, technology and cool stuff</h3>

      <div class="logo-container">
        <img class="pixel-logo" src="{{ secure_asset('img/ana.png') }}" alt="Pixel Art Self">
        <div class="platform"></div>
      </div>
    </div>

    <div class="row" ng-controller="homepagePostsController">
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

    <!--@ include('partials.footer')-->
    <!--to be finished-->

    <script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
  </body>
</html>
