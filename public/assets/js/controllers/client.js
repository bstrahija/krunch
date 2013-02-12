function clientCtrl($scope, $http) {
	$http({ method: "GET", url: "/api/clients", headers: { apikey: "xoho9vo8jofu5whi4wert8tart7te6ri" } }).
		success(function(data, status, headers, config) {
			$scope.clients = data;
		}).
		error(function(data, status, headers, config) {

		});


	/*$http.get("/api/clients").success(function(data) {
		console.log(data);
		$scope.clients = data;
	});*/
}
