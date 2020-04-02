<?php

$kalimat = "jakarta adalah ibukota negara republik indonesia";
$data = explode(" " , $kalimat);
echo "Kalimat Utama : ".$kalimat;
echo "<br/>";
echo " Unigram : " .$data[0].", ".$data[1].", ".$data[2].", ".$data[3].", ".$data[4].", ".$data[5];
echo "<br/>";
echo " Bigram = " .$data[0]." ".$data[1].", ".$data[2]." ".$data[3].", ".$data[4]." ".$data[5];
echo "<br/>";
echo " Trigram = " .$data[0]." ".$data[1]." ".$data[2].", ".$data[3]." ".$data[4]." ".$data[5];
?>
