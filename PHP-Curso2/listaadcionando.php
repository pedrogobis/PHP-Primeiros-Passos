<?php
$conta1 = [
    'Titualar' => 'Vinicios',
    'Saldo' => '2340.49'
];



$contasCorrentes = [
    13212312332 => [
        'Titualar' => 'Vinicios',
        'Saldo' => '2340.49'
    ],
    12312333221 => $conta2 = [
        'Titualar' => 'Claudio',
        'Saldo' => '2560.45'
    ],    
    12344333455 => [
        'Titualar' => 'Marcela',
        'Saldo' => '2500,00'
    ]
];

// adicionando na  unha
$contasCorrentes[35778985214] = [ 
    'Titualar' => 'Rogeria Luz',
    'Saldo' => '238364,10'
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf.PHP_EOL;
    echo $conta['Titualar'] .PHP_EOL;
    echo $conta['Saldo'] .PHP_EOL;
    echo "\n";

}