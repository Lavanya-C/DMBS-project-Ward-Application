var app = angular.module('Wapp',['ngRoute']);

// app.controller('Wctrl' ,['$scope', function($scope){
//   $scope.disMess = 'ward no';
//
// }]);
//
// app.controller('Wctrl2' ,['$scope' , function($scope){
//   $scope.name = function( wname ,wno){
//     return wname + wno ;
//   }
// }]);

app.controller('Wctrl' , ['$scope', function($scope) {
    $scope.message1 = "WELCOME TO THE WARD APPLICATION";
    $scope.message2 = "SELECT USER TYPE";
}]);

app.config( ['$routeProvider' , function($routeProvider){
        $routeProvider.when("/AdminEvent" , {
            "templateUrl" : "admin.html",
            "controller" : "AdminCtrl"
        });
        $routeProvider.when("/VoterEvent" , {
            "templateUrl" : "voter.html" ,
            "controller" : "VoterCtrl"
        });
        $routeProvider.otherwise({
            "redirectTo" : "/AdminEvent"
        });

}]);

function HomeFragmentController($scope) {
    $scope.$on("$routeChangesSuccess" , function(scope , next,current){
        $scope.transitionState = "active"
    });
}

// app.config(function($routerProvider){
//   $routeProvider.
//   when("/AdminEvent" , {
//     templateUrl : "admin.html",
//     controller : "AdminCtrl"
//   }).
//   when("/VoterEvent" , {
//     templateUrl : "voter.html",
//     controller : "VoterCtrl"
//
//   }).
//   otherwise({
//     redirectTo : "/VoterEvent"
//   });
// });

app.controller("AdminCtrl" , ['$scope', function($scope){
  $scope.mess = "Ward ";
}]);

app.controller("VoterCtrl" , ['$scope', function($scope){
  $scope.mess = "yy";
}]);
