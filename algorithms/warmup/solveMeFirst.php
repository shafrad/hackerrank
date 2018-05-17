<?php
function solveMeFirst($a,$b){
  // Hint: Type return $a + $b; below  
    
    $res = $a + $b;
    return $res;
  
}
$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>