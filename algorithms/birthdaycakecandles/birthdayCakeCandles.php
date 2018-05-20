<?php

$handle = fopen ("php://stdin", "r");
function birthdayCakeCandles($n, $ar) {
    // Complete this function
    $max=$ar[0];
    $num=1;
    for ($i=1;$i<$n; $i++){
    if ($ar[$i]>$max){ 
        $max=$ar[$i];
        $num=1;
   } else if ($ar[$i]==$max){ 
        $num++;
    }
   }
  return $num;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";

?>