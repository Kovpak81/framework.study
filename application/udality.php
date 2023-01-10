<?php

$day =15;

if($day > 1 and $day <= 10) {
    echo '$day in 1st dekada';
}  elseif($day >=11 and $day < 20) {
    echo $day . ' in 2nd dekada';
} else {
    echo '$day in 3d dekada';
}

