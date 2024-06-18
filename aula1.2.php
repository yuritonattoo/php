<?php 
    // estrutura de decisao

    $a = 10;
    $b = 80;
    $c = 30;


    if($a > $b && $a > $c){
        echo "A é maior";
    }else if($b > $a && $b > $c){
        echo "B é maior";
    }
    else{
        echo "C é maior";
    }
?>