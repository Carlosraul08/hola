<?php
$w = [
    [2,4,99,12,45],
    [4,5]
];
$suma = 0; 
foreach ($w as $v){
    foreach($v as $x){
        $suma = $suma + $x;
    }
}
echo "suma de array de dos dimenciones: $suma";

