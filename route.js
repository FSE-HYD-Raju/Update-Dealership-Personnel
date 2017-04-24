/**
 * Created by thotar on 4/14/2017.
 */
var App = angular.module("myApp", ['ngRoute']);
App.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider
            .when('/home', {
                templateUrl: 'Views/home.html',

            })
            .when('/ShowEmployee', {
                templateUrl: 'Views/ShowEmployee.html',

            })
            .when('/AddEmployee', {
                templateUrl: 'Views/AddEmployee.html',

            })
            .when('/updateEmployee', {
                templateUrl: 'Views/updateEmployee.html',

            })
            .when('/DeleteEmployee', {
                templateUrl: 'Views/DeleteEmployee.html',

            })
            .otherwise({redirectTo : 'Views/home'})
    }]);