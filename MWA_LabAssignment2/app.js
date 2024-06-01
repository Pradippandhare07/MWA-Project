var app = angular.module("eventApp", []);

app.controller("EventController", function($scope, $http) {
  $http.get("/api/events")
    .then(function(response) {
      $scope.events = response.data;
    });
});
