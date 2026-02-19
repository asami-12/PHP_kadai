<?php
$i = 0;
echo "$i \n";
$j = 1;
echo "$j \n";

while($j <= 10000) {
    $k = $i + $j;
    $i = $j;
    $j = $k;
    echo "{$k} \n";
}
