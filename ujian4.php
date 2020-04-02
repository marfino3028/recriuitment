<style>
td {
    padding: 2px;
    min-width: 1em;
    text-align: center;
}
.black{
  background-color: black;
  color: white;
}
.white{
  background-color: white;
  color: black;
}
</style>
<?php
$columns = array(
    1 => array(1,2,3,4,5,6,7,8),
    2 => array(9,10,11,12,13,14,15,16),
    3 => array(17,18,19,20,21,22,23,24),
    4 => array(25,26,27,28,29,30,31,32),
    5 => array(33,34,35,36,37,38,39,40),
    6 => array(41,42,43,44,45,46,47,48),
    7 => array(49,50,51,52,53,54,55,56),
    8 => array(57,58,59,60,61,62,63,64)
  );

  $stmt = "<table>";
  foreach($columns as $key => $value){
    $stmt .= "<tr>";
    foreach($value as $k => $v){
      $num = rand(1,20);
      if($num % 2){
        $class = "black";
      }else{
        $class = "white";
      }
      $stmt .= "<td class='".$class."'>".$v."</td>";
    }
    $stmt .= "</tr>";
  }
  $stmt .= "</table>";
?>

<div>
    <?=$stmt?>
</div>
