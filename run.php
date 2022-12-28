<?php

include "s/solution.php";

$a = 10;
$b = 30;

if (!function_exists('sum')){
    echo('تابعی با نام sum تعریف کرده اید؟');
    exit(1);
}

if (is_null(sum($a, $b))){
    echo 'آیا از عبارت return در تابع استفاده کرده اید؟';
    exit(1);
}

if (sum($a, $b) !== 40) {
    echo('آیا دو عدد داده شده را باهم جمع کرده اید؟');
    exit(1);
}

exit(0);
