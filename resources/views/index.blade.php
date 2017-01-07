@extends('layouts.base')

@section('title')
  home
@endsection

@section('body')
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
              <small>in <span class="label label-default">@{{ item.category }}</span></small>
            </h4>
          </div>
          <img src="img/posts/sample@{{ $index }}.jpg" alt=""><br>
          <p class="description">
            @{{ text_wrap(item.body_en); }} <strong>- continue reading</strong>
          </p>
        </div>
      </div>
    </div>
@endsection
