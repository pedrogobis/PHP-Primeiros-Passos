<?php

$idade = 18;
$nome = "Marcos";

echo "Você só pode entrar se tiver mais que 18 anos" .PHP_EOL;

if($idade >= 18 and $nome == "Marcos"){
    echo "Você tem $idade anos, pode entrar!".PHP_EOL;
    echo "Bem vindo Marcos";
}else{
    echo"Você tem $idade anos, então não pode entrar".PHP_EOL;

}
