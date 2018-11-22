<?php
$v = [1,5,6,99,12,11,111];


$suma = 0;
foreach ($v as $x){
    echo "x: $x <br>";
    $suma = $suma + $x;
    echo "suma con foreach: $suma <br>";
}
