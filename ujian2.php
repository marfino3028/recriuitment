<?php

function jumlah($str)
{
	$besar = 0;
	$kecil = 0;

	for ($i = 0; $i < strlen($str); $i++)
	{
		if ($str[$i] >= 'A' &&
			$str[$i] <= 'Z')
			$besar++;
		else if ($str[$i] >= 'a' &&
				$str[$i] <= 'z')
			$kecil++;
	}
    echo "Huruf Besar dari TranSISI sejumlah: " , $besar,"\n" ;
    echo "<br>";
	echo "Huruf Kecil dari TranSISI sejumlah : " ,$kecil,"\n" ;

}


	$str = "TranSISI";
	jumlah($str);


?>
