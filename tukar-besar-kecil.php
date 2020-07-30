<?php
function tukar_besar_kecil($string){
	$output = "";
	for ($i=0; $i < strlen($string); $i++) { 
		$orde = ord($string[$i]);
		if ($orde > 64 && $orde <91){
			$output.=chr($orde +32);

		}else if ($orde >96 && $orde <123){
			$output.=chr($orde-32);
		}else {
			$output.=$string[$i];
		}
	}
	return $output;
}
// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>". tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>". tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>". tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>". tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>