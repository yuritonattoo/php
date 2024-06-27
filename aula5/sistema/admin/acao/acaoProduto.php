<?php
    if(isset($_POST["enviar"]))
    {
        $produto = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $foto = $_FILES["foto"] ["name"];
        $foto_tamanho = $_FILES["foto"] ["size"];
        $foto_tipo = $_FILES["foto"] ["type"];
        $md5 = md5 (time());
        $caminho = "imagem/";
        $mensagem = $_POST["mensagem"];
        
        if(empty(trim($produto))  ){
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroProduto.php';</script>";
        }else if( strpos($foto_tipo, "png") && $foto_tamanho <= 10000000 ){
            move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho . $md5 .  $_FILES["foto"]["name"] );
        }else{
            echo "<script> alert('Não foi possível enviar');window.location.href='../cadastroProduto.php';</script>";
        }

    }else{
        echo "Não foi possível cadastrar";
    }



      /* if(empty(trim($pais)))
        {
            echo "<script> alert('Campo em Branco'); window.location.href='../cadastroPais.php';</script>";
        }
        else
        {
            echo "<script> alert('Cadastrado com Sucesso'); window.location.href='../cadastroPais.php';</script>";
            header("Location: ../cadastroPais.php");
        }
    }
    else
    {
        echo "Não foi possível cadastrar o pais.";
    }*/
?>