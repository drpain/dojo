<?php

chdir(realpath(dirname(__FILE__)));

require_once("../lib/class.image.php");
require_once("../lib/functions.inc.php");

// Print out these numbers programatically
// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377
echo "Match the follow output programatically:" . PHP_EOL;
echo "0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377" . PHP_EOL;

$fib = [0, 1];

// YOUR CODE STARTS HERE

foreach (range(1, 13) as $i) {
    $lenght = sizeof($fib);
    $a = $fib[$lenght -1];
    $b = $fib[$lenght -2];
    $fib[] = $a + $b;
}

echo implode(', ', $fib);

// YOUR CODE ENDS HERE
echo PHP_EOL;