<html ng-app = "myApp">
<html>
<head>
	<title>Angular View</title>
	<style>
		




	</style>
</head>
<body>
<div>
	
<input type="text" ng-model = name>

</div>
<div>
<input type="checkbox" ng-model = "checked"> <label>Hide?</label>
</div>

<div ng-controller="list">
	<ul>

		<li ng-repeat = "name in names">{{name}}</li>
	
	</ul>

</div>
<div>
<div ng-controller = demo>
	{{name}} <br>
	{{company}}



</div>
<div ng-controller = "sc">
	aa

</div>


</div>
 <script src = "<?php echo base_url();?>assets/js/angular.js " type="text/javascript"></script>
 <script src = "<?php echo base_url();?>assets/js/app.js " type="text/javascript"></script>
</body>
</html>