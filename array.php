<?php 
$dia = date("N")-1;
$hora = date("H")-8;
$horario = array (
    array("a","b","c","d","e","f"),
    array("a","b","c","d","e","f"),
    array("a","b","c","d","e","f"),
    array("a","b","c","d","e","f"),
    array("a","b","c","d","e","f"),
);
echo $horario[1][0];