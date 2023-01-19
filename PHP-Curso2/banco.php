<?php

$contasCorrentes = [
    '13212312332' => [
        'Titualar' => 'Vinicios',
        'Saldo' => '2340.49'
    ],
    '12312333221'=>[
        'Titualar' => 'Claudio',
        'Saldo' => '2560.45'
    ],
    '12344333455'=>[
        'Titualar' => 'Marcela',
        'Saldo' => '498,00'
    ]

];

function exibeMenssagem(string $mensagem){
    echo $mensagem . PHP_EOL;
};

function sacar(array $conta, float $valorsacar): array 
{
    if($valorsacar > $conta['Saldo']){
        exibeMenssagem("Você não pode sacar!");
    }else{
        $conta['Saldo'] -= $valorsacar;
        
    }
    return $conta;
};

function depositar(array $conta,float $valordepositar): array
{
    if($valordepositar> 0){
        $conta['Saldo'] += $valordepositar;
    }else{
        exibeMenssagem("Valor invalido");
    }
    
    return $conta;
};

$contasCorrentes['12344333455'] = sacar($contasCorrentes['12344333455'], 40);
$contasCorrentes['12344333455'] = depositar($contasCorrentes['12344333455'], 324);

foreach($contasCorrentes as $cpf => $conta){
    exibeMenssagem("$cpf {$conta['Titualar']} {$conta['Saldo']} ");
}




