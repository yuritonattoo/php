<?php

if(isset($_POST["enviar"]))
{
    $cidade = $_POST['cidade'];

    if(empty(trim($cidade)))
    {
        echo "<script> alert('Campo em Branco'); window.location.href='../cadastroCidade.php';</script>";
    }
    else
    {
        echo "<script> alert('Cadastrado com Sucesso'); window.location.href='../cadastroCidade.php';</script>";
       // header("Location: ../cadastroPais.php");
    }
}
else
{
    echo "Não foi possível cadastrar a Cidade.";
}

?>