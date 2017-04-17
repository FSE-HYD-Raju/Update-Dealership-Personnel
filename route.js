/**
 * Created by thotar on 4/14/2017.
 */
var App = angular.module("myApp", ['ngRoute']);
App.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider
            .when('/home', {
                templateUrl: 'home.html',

            })
            .when('/AddEmployee', {
                templateUrl: 'AddEmployee.html',
            })
            .when('/updateEmployee', {
                templateUrl: 'updateEmployee.html',

            })
            .when('/DeleteEmployee', {
                templateUrl: 'DeleteEmployee.html',

            })
            .otherwise({redirectTo : '/AddEmployee'})
    }]);
