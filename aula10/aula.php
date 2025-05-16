<?php
    include_once 'Conta.class.php';

    $conta1 = new conta();

    $conta1->Nome = "Fulano de ";
    $conta1->Cpf = '123.323.322-55';
    ///$conta1->Saldo = 580 ;

    $conta1->consultarsaldo();
    echo "<hr>";
    echo $conta1->Depositar(250);
    echo "<hr>";
    $conta1->ConsultarSaldo();
    echo "<hr>";
    echo $conta1->Sacar(900);
    echo "<hr>";
    echo "<hr>";
    $conta1->ConsultarSaldo();
   



?>