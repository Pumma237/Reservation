angular.module('MyApp', [])
.controller('userCtrl', ['$scope', '$http' ,function($scope, $http) {

  $scope.urls = "../";
$scope.formSubmit = function(){
  $http({
    method: 'POST',
    url: 'LoginBDD.php',
    data : {
      'username' : $scope.username,
      'password' : $scope.password
   }
   }).then(function successCallback(response) {
    window.location.href = "Page/Reservation.php";
    console.log("adresse:",response);
   });
   console.log("toto");
}

  $scope.RecupLieux = function(){
  $http({
    method: 'get',
    url: 'ControllersPhp/BDD.php'
   }).then(function successCallback(response) {
    $scope.adresse = response.data;
    console.log("adresse:",$scope.adresse);
   });
  }

   $scope.RecupTrajet = function(){
    $scope.urls = "";
     console.log("data",sessionStorage.getItem("Trajets"));
     $scope.Trajets = JSON.parse(sessionStorage.getItem("Trajets"));

  }
  $scope.form = {username : ''}

  $scope.submit1 = function(){
    var config = {
      method : 'POST',
      url : 'ControllersPhp/ReservationBDD.php',
      data : {
         'Depart' : $scope.Depart.type.fAdresse,
         'Arrive' : $scope.Arrive.type.fAdresse,
         'Date'   : $scope.Datee,
      }
    };
    var request = $http(config);
    request.then(function(response){
      sessionStorage.setItem("Trajets",JSON.stringify(response.data));
      window.location.href = "Page/Reservation.php"
      console.log(response.data);
    },function(error){
      $scope.msg = error.data;
    });
  }
}]);

$( function() {
  $( "#datepicker" ).datepicker();
} );

