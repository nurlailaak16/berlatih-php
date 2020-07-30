<?php
function pasangan_terbesar($angka){

$angka_terbesar = substr($angka, 0, 2);
for ($i=0; $i <=strlen($angka)-2 ; $i++){
	$pasangan_angka = substr($angka, $i, 2);

	if ($pasangan_angka >= $angka_terbesar) 
	{
		$angka_terbesar = $pasangan_angka;
	}

} 
	return $angka_terbesar;

}

// TEST CASES
echo pasangan_terbesar(641573)."<br>"; // 73
echo pasangan_terbesar(12783456)."<br>"; // 83
echo pasangan_terbesar(910233)."<br>"; // 91
echo pasangan_terbesar(71856421)."<br>"; // 85
echo pasangan_terbesar(79918293); // 99

?>