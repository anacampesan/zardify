var app = angular.module("zardify", []);
app.controller('homepagePostsController', function ($scope, $http){
  $scope.posts = [];
  var url = "api/post";

  $http.get(url).then(function (data){
    $scope.posts = data.data;
  })

  $scope.text_wrap = function (str) {
    return (str.substring(0, 150) + '...');
  }
});
app.directive('navScroll', function($window){
  return function(scope, element, attrs)
  {
    angular.element($window).bind("scroll", function()
    {
       if (this.pageYOffset >= 100) {
           scope.changeClass = true;
       } else {
           scope.changeClass = false;
       }
      scope.$apply();
    }
  )};
});
