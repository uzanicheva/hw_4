<!DOCTYPE html>
<html>
	<head>
		<title>red div</title>
		<style>
		.red_div{
			background:red;
			height:300px;
			width:300px;
			possition:absolute;
			}
		</style>
	</head>
<body>
	<?php
		$red_div = rand();
		
		echo '<div class=red_div></div>' . $red_div;
	?>

</body>
</html>
