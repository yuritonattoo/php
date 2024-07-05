<?php

    require "../../vendor/autoload.php";
    //__DIR__ . "../../vendor/autoload.php";
    class Classe3 
        {
            public $atributoClasse3 = "atributo 3";

            // MÉTODO QUE IMPRIME NOME
            public function imprimeatributoClasse3(){
                echo $this ->atributoClasse3;
            }  
        }
?>