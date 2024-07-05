<?php

    require_once "../../vendor/autoload.php";
    //__DIR__ . "../../vendor/autoload.php";

    $composer  = new Teste();
    $composer1 = new Classe1();
    $composer2 = new Classe2();
    $composer3 = new Classe3();
    $composer4 = new Classe4();
    $composer5 = new Classe5();
    $composer6 = new Classe6();
    $composer7 = new Classe7();
    $composer8 = new Classe8();


    echo $composer ->imprimeNome(). "<br>";
    echo $composer1->imprimeatributoClasse1() . "<br>";
    echo $composer2->imprimeatributoClasse2() . "<br>";
    echo $composer3->imprimeatributoClasse3() . "<br>";
    echo $composer4->imprimeatributoClasse4() . "<br>";
    echo $composer5->imprimeatributoClasse5() . "<br>";
    echo $composer6->imprimeatributoClasse6() . "<br>";
    echo $composer7->imprimeatributoClasse7() . "<br>";
    echo $composer8->imprimeatributoClasse8() . "<br>";


?>