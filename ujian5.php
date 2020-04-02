<?php
function buatkode($b) {
    $awalnya = array("DFHKNQ");
    $gantinya =   array("EDGSK");
    $hasilnya = str_replace($awalnya, $gantinya, $b);
    echo $hasilnya;
    }

    function terjemahkan($t) {
    $kodenya =  array("EDKGSK");
    $terjemahanya = array("DFHKNQ");
    $hasilterjemahan = str_replace($kodenya, $terjemahanya, $t);
    echo $hasilterjemahan;
    }
$tes = "DFHKNQ";
echo "Kode : "; buatkode($tes);
echo "<br>";
echo "Kode sebelumnya :"; terjemahkan($tes);
?>
