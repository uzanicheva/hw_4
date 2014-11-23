<?php
	$blue_div = rand (1,3);
	
	switch ($blue_div) {
		case "1":
			echo "<div style='color:blue'>Blue div</div>";
			break;
		case "2":
			echo "<img src='http://www.standartnews.com/files/articles2/263/263113/0ee35119520da0d6a4f10e34a22e31fc_600x460.jpg' style='border: 2px solid red'/>";
			break;
		case "3":
			echo "<span style='background:black'; 'color:white'>Black-and-white span</span>";
			break;
		default:
			echo "alabala";
	}
 ?>
