<?php
$i = 0;
echo "$i \n";
$j = 1;
echo "$j \n";

while($k <= 10000) {
    echo "{$k} \n";
    $i = $j;
    $j = $k;
    $k = $i + $j;
}

do {
    echo "{$k} \n";
} while($k <= 10000);
