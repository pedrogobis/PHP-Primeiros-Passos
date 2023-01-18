<?php

$idade = 21;
$idade2 = 31;
$idade3 = 11;
$idade4 = 51;
$idade5 = 41;
$idade6 = 71;
$idade7 = 43;

$variasidades = [$idade, $idade2, $idade3, $idade4];

$listanumeros = [13, 15, 15, 16, 17, 17, 17, 18, 18, 20];

$primeiraidade = $variasidades[1];
// count é o lenght do js
for($i = 0; $i < count($variasidades); $i++){ // não pode ser um numero maior do que tem na lista.
    echo $variasidades[$i].PHP_EOL;
}


