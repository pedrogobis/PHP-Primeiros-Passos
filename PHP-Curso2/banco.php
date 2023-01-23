<?php
//opicional usamos o include
//required é obrigatorio 
//requiredonce, obriga a importar apenas uma vez

require_once 'funcoes.php';
include 'clientes.php';


$contasCorrentes['12344333455'] = sacar($contasCorrentes['12344333455'], 40);
$contasCorrentes['12344333455'] = depositar($contasCorrentes['12344333455'], 324);

// unset($contasCorrentes['12312333221']); // mesma coisa que pop.



/*
foreach($contasCorrentes as $cpf => $conta){
    // estamos criando automaticamente uma array que recebe a chave como parametro que vem do array conta.
    //['Titualar' => $titular, 'Saldo' => $saldo] = $conta;
    //exibeMenssagem("$cpf $titular $saldo ");
    exibeConta($conta);
}
*/
// apartir de agora tudo vai ser html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Contas correntes disponiveis</h1>
    <ul>
        <?php foreach($contasCorrentes as $cpf => $conta){?>
        <dt>
            <h3><?php echo $conta['Titualar'];?> - CPF: <?php echo $cpf; ?></h3>
        </dt>
        <dt>
           Saldo:<?php echo  $conta['Saldo'] ?>
        </dt>
        <?php } ?>
    </ul>
</body>
</html>