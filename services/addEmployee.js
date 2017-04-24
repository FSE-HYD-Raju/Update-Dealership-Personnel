/**
 * Created by thotar on 4/14/2017.
 */
App.controller("addEmployeeController", function ($Scope, $location) {
    $Scope.gotomainadd = function ($location) {
        $location.url('/updateEmployee');
        $scope.controlno = ctrlno;
    }
})
