<?php

$string="Orange Coding Academy";
function count_Vowels($string)
{
    preg_match_all('o', $string, $matches);
    return count($matches[0]);
}
echo count

?>