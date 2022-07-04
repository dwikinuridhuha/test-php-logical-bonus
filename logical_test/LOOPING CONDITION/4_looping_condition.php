<?php

function fizzbuzz($num) {
    if($num % 15 == 0) echo $num . " : FooBar" . PHP_EOL;
    else if($num % 3 == 0) echo $num . " : Foo" . PHP_EOL;
    else if($num % 5 == 0) echo $num . " : Bar" . PHP_EOL;
}

for ($i = 1; $i <= 50; $i++) {
    fizzbuzz($i);
}