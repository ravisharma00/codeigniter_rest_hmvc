var app = angular.module("myApp", []);

app.controller("myCtrl",function($scope){
	$scope.name = "ravi";
	$scope.last	= "sharma";
})
app.controller("myCtrl1",function($scope){
	$scope.name = "ravi";
	$scope.last	= "sharma";

});
app.controller("list",function($scope){
	$scope.names = ["a","b","c","d","w"]
})

app.controller('demo',function($scope){
	$scope.name 	= "akash Bindal";
	$scope.company 	= "WittyFeed";
	var x = 100;
	// console.log(x);

})
app.controller('sc',function(){
	console.log(x);
})