<?php

    require "../../vendor/autoload.php";
    //__DIR__ . "../../vendor/autoload.php";
    class Classe2 
        {
            public $atributoClasse2 = "atributo 2";

            // MÉTODO QUE IMPRIME NOME
            public function imprimeatributoClasse2(){
                echo $this ->atributoClasse2;
            }  
        }
?>