<?php

$handle = fopen ("php://stdin", "r");
function plusMinus($arr) {
    // Complete this function
    //init the counter.
    $positive = 0;
    $negative = 0;
    $zeros = 0;
    
    for ($i = 0; $i < count($arr); $i++) {
    //check which number is available.
    if ($arr[$i] > 0) {
        $positive++;
        } elseif ($arr[$i] < 0) {
        $negative++;
        } else {
        $zeros++;
    }
}
    //output the different groups.
    echo (float) round($positive / count($arr), 6)."\n";
    echo (float) round($negative / count($arr), 6)."\n";
    echo (float) round($zeros / count($arr), 6)."\n";
}

fscanf($handle, "%i",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
plusMinus($arr);

?>