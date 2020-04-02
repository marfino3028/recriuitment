<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ujian6.php" method="get">
      huruf: <input type="text" name="search" />
      <br>
      <br>
      <input type="submit" value="Proses Data" >
   </form>
   <br>
   <br>
<?php
$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
    ];

    @$search=$_GET['search'];
    $searchArr = str_split($search);

    $arr = call_user_func_array('array_merge',$arr);

    if(count(array_diff($searchArr,$arr)) == 0){
        echo "true";
    }


?>

