<?php

include "s/solution.php";

$a = 10;
$b = 30;

if (!function_exists('sum')){
    exit(1);
}

if (is_null(sum($a, $b))){
    exit(1);
}

if (sum($a, $b) !== 40) {
    exit(1);
}

exit(0);
