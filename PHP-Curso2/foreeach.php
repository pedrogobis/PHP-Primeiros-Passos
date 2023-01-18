<?php
$conta1 = [
    'Titualar' => 'Vinicios',
    'Saldo' => '2340.49'
];
$conta2 = [
    'Titualar' => 'Claudio',
    'Saldo' => '2560.45'
];
$conta3 = [
    'Titualar' => 'Marcela',
    'Saldo' => '2500,00'
];

$contasCorrentes = [
    13212312332 => $conta1,
    12312333221 => $conta2,
    12344333455 => $conta3
];
/*
foreach($contasCorrentes as $conta){
    echo $conta['Titualar'] .PHP_EOL;
    echo $conta['Saldo'] .PHP_EOL;
    echo "\n";

}*/
// pegou a chave para mostrar o incide
foreach($contasCorrentes as $cpf => $conta){
    echo $cpf.PHP_EOL;
    echo $conta['Titualar'] .PHP_EOL;
    echo $conta['Saldo'] .PHP_EOL;
    echo "\n";

}
