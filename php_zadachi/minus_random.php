<?php
 
$minus = rand(-100,100);

if ($minus >= -100 && $minus <=0) {
	echo "Отрицателно число";
}

if ($minus >= 0 && $minus <=50) {
	echo "Число между 0 и 50";
}

if ($minus > 50) {
	echo "<div style='color:yellow'>Числото е по-голямо от 50</div>";
	}
?>
