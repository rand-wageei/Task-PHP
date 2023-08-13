<?php

$colors = array("red","blue", "white","yellow");
$colors = array_flip($colors);
$colors = array_change_key_case($colors, CASE_UPPER);

$colors = array_flip($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";

?>