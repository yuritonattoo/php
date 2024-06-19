<?php
    //Função de data

    echo date("d/m/y") . "<br>";
    echo date("d/m/Y") . "<br>";
    echo date("H:i:s") . "<br>";

    //Funções de servidores globais
    echo $_SERVER['PHP_SELF']. "<br>"; //arquivo 
    echo $_SERVER['SERVER_NAME']. "<br>"; //localhost
    echo $_SERVER['REMOTE_ADDR']. "<br>"; //status
    echo $_SERVER['REMOTE_HOST']. "<br>"; //dominio


?>