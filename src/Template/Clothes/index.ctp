<?php
$urlToRestApi = $this->Url->build([
    'prefix' => 'api',
    'controller' => 'Clothes'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Clothes/index', ['block' => 'scriptBottom']);
?>

<div  ng-app="app" ng-controller="ClotheCRUDCtrl">
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="clothe.id" /></td>
        </tr>
        <tr>
            <td width="100">Name:</td>
            <td><input type="text" id="name" ng-model="clothe.name" /></td>
        </tr>
        <tr>
            <td width="100">Price:</td>
            <td><input type="text" id="price" ng-model="clothe.price" /></td>
        </tr>
    </table>
    <br /> <br /> 
    <a ng-click="getClothe(clothe.id)">Get Clothe</a> 
    <a ng-click="updateClothe(clothe.id, clothe.name, clothe.price)">Update Clothe</a> 
    <a ng-click="addClothe(clothe.name, clothe.price)">Add Clothe</a> 
    <a ng-click="deleteClothe(clothe.id)">Delete Clothe</a>

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br /> 
    <a ng-click="getAllClothes()">Get all Clothes</a><br /> 
    <br /> <br />
    <div ng-repeat="clothe in clothes">
        {{clothe.id}} {{clothe.name}} {{clothe.price}}
    </div>
</div>

