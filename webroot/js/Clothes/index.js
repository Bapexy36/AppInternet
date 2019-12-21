var app = angular.module('app', []);

app.controller('ClotheCRUDCtrl', ['$scope', 'ClotheCRUDService', function ($scope, ClotheCRUDService) {

        $scope.updateClothe = function () {
            ClotheCRUDService.updateClothe($scope.clothe.id, $scope.clothe.name, $scope.clothe.price)
                    .then(function success(response) {
                        $scope.message = 'Clothe data updated!';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error updating clothe!';
                                $scope.message = '';
                            });
        }

        $scope.getClothe = function () {
            var id = $scope.clothe.id;
            ClotheCRUDService.getClothe($scope.clothe.id)
                    .then(function success(response) {
                        $scope.clothe = response.data.data;
                        $scope.clothe.id = id;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                if (response.status === 404) {
                                    $scope.errorMessage = 'Clothe not found!';
                                } else {
                                    $scope.errorMessage = "Error getting clothe!";
                                }
                            });
        }

        $scope.addClothe = function () {
            if ($scope.clothe != null && $scope.clothe.name) {
                ClotheCRUDService.addClothe($scope.clothe.name, $scope.clothe.price)
                        .then(function success(response) {
                            $scope.message = 'Clothe added!';
                            $scope.errorMessage = '';
                        },
                                function error(response) {
                                    $scope.errorMessage = 'Error adding clothe!';
                                    $scope.message = '';
                                });
            } else {
                $scope.errorMessage = 'Please enter a name!';
                $scope.message = '';
            }
        }

        $scope.deleteClothe = function () {
            ClotheCRUDService.deleteClothe($scope.clothe.id)
                    .then(function success(response) {
                        $scope.message = 'Clothe deleted!';
                        $scope.clothe = null;
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error deleting clothe!';
                                $scope.message = '';
                            })
        }

        $scope.getAllClothes = function () {
            ClotheCRUDService.getAllClothes()
                    .then(function success(response) {
                        $scope.clothes = response.data.data;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                $scope.errorMessage = 'Error getting clothes!';
                            });
        }

    }]);

app.service('ClotheCRUDService', ['$http', function ($http) {

        this.getClothe = function getClothe(clotheId) {
            return $http({
                method: 'GET',
                url: urlToRestApi + '/' + clotheId,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.addClothe = function addClothe(name, price) {
            return $http({
                method: 'POST',
                url: urlToRestApi,
                data: {name: name, price: price},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.deleteClothe = function deleteClothe(id) {
            return $http({
                method: 'DELETE',
                url: urlToRestApi + '/' + id,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.updateClothe = function updateClothe(id, name, price) {
            return $http({
                method: 'PATCH',
                url: urlToRestApi + '/' + id,
                data: {name: name, price: price},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.getAllClothes = function getAllClothes() {
            return $http({
                method: 'GET',
                url: urlToRestApi,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

    }]);


