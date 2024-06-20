<?php

if(isset($_POST["enviar"]))
{
    $pais = $_POST['pais'];

    if(empty(trim($pais)))
    {
        echo "<script> alert('Campo em Branco'); window.location.href='../cadastroPais.php';</script>";
    }
    else
    {
        echo "<script> alert('Cadastrado com Sucesso'); window.location.href='../cadastroPais.php';</script>";
       // header("Location: ../cadastroPais.php");
    }
}
else
{
    echo "Não foi possível cadastrar o pais.";
}

?>