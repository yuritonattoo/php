<?php

if(isset($_POST["enviar"]))
{
    $estado = $_POST['estado'];

    if(empty(trim($estado)))
    {
        echo "<script> alert('Campo em Branco'); window.location.href='../cadastroEstado.php';</script>";
    }
    else
    {
        echo "<script> alert('Cadastrado com Sucesso'); window.location.href='../cadastroEstado.php';</script>";
       // header("Location: ../cadastroPais.php");
    }
}
else
{
    echo "Não foi possível cadastrar o estado.";
}

?>