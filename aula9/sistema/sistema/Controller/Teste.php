<?php

    require "../../vendor/autoload.php";
    //__DIR__ . "../../vendor/autoload.php";
    class Teste 
        {
            public $nome = "Teste Autoload";

            // MÉTODO QUE IMPRIME NOME
            public function imprimeNome(){
                echo $this ->nome;
            }  
        }
?>