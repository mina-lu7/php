<?php
$base = 10;
$add_base = function ($num) use ($base) {
    return $num + $base;
};

$result =$add_base(5);
echo $result;


