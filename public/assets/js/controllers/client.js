function ClientCtrl($scope, $http) {
	$http({ method: "GET", url: "/api/clients", headers: { apikey: API_KEY } }).
		success(function(data, status, headers, config) {
			$scope.clients = data;
		}).
		error(function(data, status, headers, config) {

		});

	$scope.orderProp = 'title';
}
