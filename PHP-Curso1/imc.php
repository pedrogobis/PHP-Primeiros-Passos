<?php

$peso = 70;
$altura= 1.73;

echo "Vamos calcular seu IMC!".PHP_EOL;

$imc = $peso / ($altura * $altura);

echo "Pedro, seu IMC é $imc";

if($imc < 18){
    echo "seu imc está abaixo do ideal".PHP_EOL;
}elseif($imc < 25){
    echo "seu imc está dentro".PHP_EOL;
}else{
    echo"seu imc está a cima".PHP_EOL;
}

