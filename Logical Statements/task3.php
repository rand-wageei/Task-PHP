<?php

function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    
    if ($firstInteger === $secondInteger) {
        $tripleSum = $sum * 3;
        return "( $firstInteger + $secondInteger ) * 3 = $tripleSum <br>it is summertime ";
        
    } else {
        return "$firstInteger + $secondInteger = $sum <br>it is not" ;
        
    }
}

$firstInteger = 2;
$secondInteger = 2;
$result = calculateSum($firstInteger, $secondInteger);
echo $result;

?>