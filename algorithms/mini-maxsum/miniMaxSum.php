<?php

$handle = fopen ("php://stdin", "r");
function miniMaxSum($arr) {
    // Complete this function
     $min = $arr[0];
     $max = $arr[0];
     $sum = $arr[0];
  
    for ($i = 1; $i < count($arr); $i++) {
   if ($arr[$i]< $min ) {
       $min = $arr[$i];
   } if ($arr[$i] > $max ) {
       
    $max = $arr[$i];
   }
   $sum += $arr[$i];
    }
  echo ($sum - $max) . " " . ($sum - $min) . "\n";
}

$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
miniMaxSum($arr);

?>  