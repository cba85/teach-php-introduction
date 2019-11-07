<?php

/*
function add()
{
    $total = 0;
    foreach (func_get_args() as $number) {
        if (!is_numeric($number)) {
            continue;
        }
        $total += $number;
    }
    // $total = array_sum(func_get_args());
    return $total;
}
*/

function add(...$args)
{
    $total = 0;
    foreach ($args as $number) {
        if (!is_numeric($number)) {
            continue;
        }
        $total += $number;
    }
    return $total;
}

echo add(1, 2, 3, 4);
