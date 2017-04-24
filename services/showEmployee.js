/**
 * Created by thotar on 4/22/2017.
 */
App.controller("ShowEmployeeController", function ($scope, $http) {
    $scope.GetData = function (Emp_id) {

        $http.get('Internal Resources/Employee.json')
            .success(function (data) {

                $scope.Data = data.Session.Reply[1].Employee[Emp_id];
                //alert(JSON.stringify($scope.Data));

            })
            .error(function (err) {
                alert("Error!")

            });
    }
});
