<?php
    echo "<pre>";

    $nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);

    echo "Semua Nilai : ";
    echo implode(", ", $nilai);
    echo "<br>";

    echo "rata rata nilai : ";
    echo number_format(array_sum($nilai) / count($nilai), 2);
    echo "<br>";


    sort($nilai);


    echo "List dari 7 nilai terendah : ";
    echo implode(", ", array_slice($nilai, 0, 7));
    echo "<br>";

    //print the last 5 values
    echo "List dari 7 nilai tertinggi : ";
    echo implode(", ", array_slice($nilai, -7, 7));
    echo "<br>";

    echo "</pre>";
?>
