<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	if (sizeof($arr)<=2) {
		return true;
	}
	$art = $arr[0]*$arr[1];
	for ($i=1; $i > sizeof($arr) ; $i++) { if (($arr[$i]*($arr[$i-1]))!=$art) {
		return "false";
	}

	}
	return "true";
}

// TEST CASES
echo  tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>".tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>".tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>".tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>".tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>