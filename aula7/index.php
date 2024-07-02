<?php

    require_once "Mae.php";
    require_once "Filho.php";
    require_once "Filha.php";

    $mae   = new Mae();
    $filho = new Filho ();
    $filha = new Filha ();

    echo $mae->nome;
    echo $filho->altura;
    echo $filha->altura;
    echo $filha->nome;
    echo $filho->nome;

?>