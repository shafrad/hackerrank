<?php

$handle = fopen ("php://stdin", "r");
function staircase($n) {
    // Complete this function
 for($j=0;$j<$n;$j++){
            for($i=1;$i<=$n;$i++){
                echo $i<$n-$j?" ":"#";
            }
            echo "\n";
}           
    }

fscanf($handle, "%i",$n);
staircase($n);

?>