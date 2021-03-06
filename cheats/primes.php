<?php

chdir(realpath(dirname(__FILE__)));

require_once("../lib/class.image.php");
require_once("../lib/functions.inc.php");

// Print out the first 25 prime numbers
// 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97
echo "Match the follow output programatically:" . PHP_EOL;
echo "2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97" . PHP_EOL;

$primes = [];
$x = 2;

// YOUR CODE STARTS HERE

do {
    $count = 0;
    foreach (range(1, $x) as $key) {
        if ($x % $key == 0) $count++;
        if ($count > 2) break;
    }

    if ($count <= 2) {
        $primes[] = $x;
    }

    $x++;

    // Catch loop too high
    if ($x == 100) {
        break;
    }

} while (count($primes) < 25);

echo implode(', ', $primes);


// YOUR CODE ENDS HERE
echo PHP_EOL;