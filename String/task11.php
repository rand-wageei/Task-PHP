<?php
$cha = 'a';
$cha1='z';
$next_cha = ++$cha; 
$next_cha1 = ++$cha1; 

if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo"<br>";
if (strlen($next_cha1) > 1) 
{
 $next_cha1 = $next_cha1[0];
 }
echo $next_cha1."\n";
?>

