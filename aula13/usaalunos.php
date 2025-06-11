<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno ("Gordofreto",10,7);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
   // echo $nota1;
     $media = $fulano->CalcularMedia($nota1, $nota2);

     

     echo "Nome do aluno : " . $fulano->getNome(). "<br>";

     echo "Média : $media <br>";

     echo" Situação : " . $fulano->VerificarSituacao($media);

     echo"<hr>";


?>