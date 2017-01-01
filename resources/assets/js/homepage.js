var app = angular.module("zardify", []);
app.controller('homepageController', function ($scope, $http){
  $scope.test = "hue";
  $scope.posts = [];
  var url = "api/post";

  $http.get(url).then(function (data){
    $scope.posts = data.data;
  })
});
