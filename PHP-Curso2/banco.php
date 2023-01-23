<?php
//opicional usamos o include
//required é obrigatorio 
//requiredonce, obriga a importar apenas uma vez

require_once 'funcoes.php';
include 'clientes.php';


$contasCorrentes['12344333455'] = sacar($contasCorrentes['12344333455'], 40);
$contasCorrentes['12344333455'] = depositar($contasCorrentes['12344333455'], 324);


titularMaiusculo($contasCorrentes['12344333455']);

foreach($contasCorrentes as $cpf => $conta){
    exibeMenssagem("$cpf {$conta['Titualar']} {$conta['Saldo']} ");
}




