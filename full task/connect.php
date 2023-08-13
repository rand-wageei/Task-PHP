<?php

$serverName ="localhost"; 
$userName ="root"; 
$password =""; 
$database ="Crud";

$conn=new mysqli($serverName , $userName , $password ,$database);
if($conn ->connect_error){
    die ("connection faild".$conn->connect_error);
}
?>
