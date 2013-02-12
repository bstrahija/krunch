function InvoiceCtrl($scope, $http) {
	$http({ method: "GET", url: "/api/invoices", headers: { apikey: API_KEY } }).
		success(function(data, status, headers, config) {
			$scope.invoices = data;
		}).
		error(function(data, status, headers, config) {

		});
}
