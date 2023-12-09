<?php
require_once('vendor/autoload.php');

$test = [];

for ($i = 0; $i <= 10; $i++) {
    $time = time() + $i;
    $test[$time] = date('c', $time);
}

print_r($test);