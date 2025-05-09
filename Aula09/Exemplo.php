<?php
    include_once "Lampada.class.php";

    $lamp1 = new Lampada();

   // var_dump($lamp1)

   $lamp1->fabricantes="Philips";
   $lamp1->tensao=10;
   $lamp1->potencia=50;
   $lamp1->cor="Branco";


   $lamp1-Mostrardados();


   $lamp1->ligar();
   $lamp1->Mostrardados();


?>