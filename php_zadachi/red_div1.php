<!DOCTYPE html>
<html>
	<title>red div</title>
	<head>
	<style>
	.red_div{
			background:red;
			height:300px;
			width:300px;
			position:absoute;
			top: <?php echo rand () ?>;
			left: <?php echo rand () ?>;
			right: <?php echo rand () ?>;
			bottom: <?php echo rand () ?>;
	}
	</style>
	</head>
	<body>
		<div class="red_div"></div>;
	</body>
</html>
