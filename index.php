<?php
$array = array(40, 49, 50, 64, 65, 79, 80, 70)

foreach ($array as $value){
	if($value < 50){
		echo "不可 " . $value;
	}elseif($value <= 50 && 65 < $value){
		echo "可 " . $value;
	}elseif($value <= 65 && 80 < $value){
		echo "良 " . $value;
	}elseif(80 <= $value){
		echo "優 " . $value;
	}
}

?>
