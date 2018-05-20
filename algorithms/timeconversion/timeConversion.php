<?php

$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
    // Complete this function
    return date("H:i:s", strtotime($s));
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>