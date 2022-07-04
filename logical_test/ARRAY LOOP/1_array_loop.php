<?php

$aplikasi[1] = "gtAkademik";
$aplikasi[2] = "gtFinasi";
$aplikasi[3] = "gtPerizinan";
$aplikasi[4] = "eCampuz";
$aplikasi[5] = "eOziv";


//var_dump($aplikasi);
$i = 1;
while (true) {
    echo $aplikasi[$i] . "</br >";
    $i++;
    if($i > 5) break;
}