<?php

$handle = fopen ("php://stdin", "r");
function simpleArraySum($n, $ar) {
    // Complete this function
    return array_sum($ar);
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = simpleArraySum($n, $ar);
echo $result . "\n";

?>