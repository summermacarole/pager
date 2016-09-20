/**
 * @author :  Chen Chuanliang
 * @date : 2016/9/20 21:37
 * @description :分页相关的逻辑控制器等都在这儿
 */
'use strict';
var paging=angular.module('pagingApp',[]);
paging.controller('pagingCtrl',function($scope,$http){
  //分页的默认参数以及获取默认数据
  $scope.paging={
    page:1,
    pagesize:2
  };
  $http({
    method:'get',
    params:$scope.paging,
    url:'php/paging.php'
  } ).then(function(success){
    $scope.infos=success.data.myOrder.infos;
    console.log(JSON.stringify($scope.infos))
  })
});