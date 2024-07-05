<?php

    require "../../vendor/autoload.php";
    //__DIR__ . "../../vendor/autoload.php";
    class Classe1
        {
            public $atributoClasse1 = "atributo 1";

            // MÉTODO QUE IMPRIME NOME
            public function imprimeatributoClasse1(){
                echo $this ->atributoClasse1;
            }  
        }
?>