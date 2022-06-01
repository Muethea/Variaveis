<?php

//Variaveis Basicas
$nome = "Fernando";
$site = 'www.hcode.com.br';

$ano = 1998;
$salario = 6000.8;
$bloquado = false;

//echo "Nome: ".$nome." </br>"." ".$site ." ".$ano;

//////////// Variaveis compostas//////////////

$nomes = array("Fernando", "Maria", "Manuela", "Luis");

"</br>";

//////////////Variaveis Especias/////////
$nascimento = new DateTime();
//var_dump($nascimento);

////////////////////////////////////////////////

$arquivo = fopen("variaveis.php", "r");

//var_dump($arquivo);

//////////// Variaveis Especial//////////
$nulo = null;

var_dump($nulo);
?>