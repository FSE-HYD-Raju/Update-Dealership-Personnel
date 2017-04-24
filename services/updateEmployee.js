/*
App.controller("UpdateEmployeeController", function ($scope, $http, $q) {
    $scope.GetData = function () {

        var deferred = $q.defer();

        alert("in Function");
        $http({
            method: 'GET',
            url: './services/DMSdata.php'
        }).then(function successCallback(response) {
            deferred.resolve(response);
           $scope.Data1= response;
            alert(JSON.stringify( $scope.Data1));
        }, function errorCallback(response) {
            deferred.reject(response);
        });
        return deferred.promise;
    }

});*/



