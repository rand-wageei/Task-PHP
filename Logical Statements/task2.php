<?php

function getSeason($temperature) {
    if ($temperature < 20) {
        return 'It is wintertime!';
    } else {
        return 'It is summertime!';
    }
}

$temperature = 27;
$result = getSeason($temperature);
echo $result;

?>