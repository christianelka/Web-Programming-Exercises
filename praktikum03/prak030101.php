<?php 
function gandakanString($str, $i) {
	$a = "";
	for ($it = 1; $it <= $i; $it++) {
		$a .= $str;
	}
	return $a;
}

echo gandakanString("hello", 3);
?>