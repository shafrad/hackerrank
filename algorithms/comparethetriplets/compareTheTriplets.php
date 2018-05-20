<?php

$handle = fopen ("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2){
    // Complete this function
    $resultA = 0;
    $resultB = 0;
    $arrA = array($a0,$a1,$a2);
    $arrB = array($b0,$b1,$b2);
    for($i = 0; $i <3; $i++){
        if ($arrA[$i] > $arrB[$i] && $arrA[$i] - $arrB[$i] != 0){
            $resultA++;
        }else if($arrB[$i] > $arrA[$i] && $arrB[$i] - $arrA[$i] != 0){$resultB++ ;}
    }
    $array = array($resultA, $resultB);
    return $array;
}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result)."\n";



?>