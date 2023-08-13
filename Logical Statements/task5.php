<?php

function test($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test(20));

?>
