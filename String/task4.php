<?php
$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>



<?php
 $string = 'www.orange.com/index.php';
 echo basename($string);

?>