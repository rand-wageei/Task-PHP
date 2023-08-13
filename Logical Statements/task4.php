<?php

function checkSumEquals30($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber === 30;
}

$firstNumber = 15;
$secondNumber = 16;

if (checkSumEquals30($firstNumber, $secondNumber)) {
    echo "true";
} else {
    echo "false";
}

?>