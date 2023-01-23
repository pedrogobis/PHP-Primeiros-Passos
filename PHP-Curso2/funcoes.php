<?php

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

function titularMaiusculo(array &$conta){
   
    $conta['Titualar'] = mb_strtoupper($conta['Titualar']);
    
}