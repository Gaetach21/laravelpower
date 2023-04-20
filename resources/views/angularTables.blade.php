<!DOCTYPE html>
<html>
<head>
	<title>Angular Tables</title>
	<script src="{{ asset('js/angular.min.js') }}"></script>
	<style type="text/css">
		/*table, th, td {border: 1px solid grey; 
			padding: 5px;
			border-collapse: collapse;}
			table tr:nth-child(odd){background-color: #f1f1f1;}
			table tr:nth-child(even){background-color: #ffffff;}*/

			table, td {border: 1px solid grey; 
			padding: 5px;
			border-collapse: collapse;}
	</style>
</head>
<body>
 <div ng-app="myApp" ng-controller="customersCtrl">
<div ng-include="'myTable.html'"></div>
</div>
​
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("//laravelpower.test/customers")
  .then(function (response) {
    $scope.names = response.data.records;
  });
});
</script>
</body>
</html>