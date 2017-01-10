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

    @yield('body')

    @include('partials.footer')

    <script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
  </body>
</html>
