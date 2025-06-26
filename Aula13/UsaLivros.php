<?php
include("Livro.class.php");

$livro1 = new Livro("1984", "George Orwell");

echo $livro1->exibirStatus() . "<br>";

$livro1->emprestar();
echo $livro1->exibirStatus() . "<br>"; 

$livro1->devolver();
echo $livro1->exibirStatus();          
?>