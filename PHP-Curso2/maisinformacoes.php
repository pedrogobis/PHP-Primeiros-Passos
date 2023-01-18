<?php


//dicionario. / objeto
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

$contasCorrentes = [$conta1, $conta2, $conta3];

//echo $conta3['Titualar'];
//echo $contasCorrentes[1];

// acessando os obejtos dentro de arrays
for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['Titualar'] .PHP_EOL;
}

