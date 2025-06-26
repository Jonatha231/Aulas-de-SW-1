<?php
include("Funcionario.class.php");

$func = new Funcionario("Fejuca ", 2600);

echo $func->exibirInformacoes() . "<br>";

$func->aumentarSalario(10);

echo $func->exibirInformacoes();
?>