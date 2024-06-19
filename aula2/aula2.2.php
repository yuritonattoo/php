<?php

    if(isset($_POST["enviar"]))
    {
        $nome   = $_POST['nome'];
        $estado = $_POST['estado'];
        $area2  = $_POST['area2'];

        echo $nome . "<br>" . $estado . "<br> " . $area2;
    }
    else
    {
        echo "Não foi possível enviar o formulário.";
    }



?>