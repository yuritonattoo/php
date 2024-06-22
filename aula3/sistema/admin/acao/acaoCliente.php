<?php

    if( isset( $_POST['enviar'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $rendaMensal = $_POST['rendaMensal'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
       $radios = $_POST['exampleRadios'];

        if(empty(trim($nome))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
        
        }else if(empty(trim($cpf))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

        }else if(empty(trim($nascimento))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

        }else if(empty(trim($rendaMensal))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

        }else if(empty(trim($logradouro))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

        }else if(empty(trim($complemento))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

        }else if(empty(trim($cidade))){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

        }else if(empty(trim($radios)) && $radios==null){
            echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";

    }else {
        echo "Nome: " . $nome . "<br>" . "CPF: " . $cpf . "<br>" . "Data de Nascimento: " . $nascimento . "<br>" . "Renda Mensal: " . $rendaMensal . "<br>" . "Logradouro: " . $logradouro . "<br>" . "Complemento: " . $complemento . "<br>" . "Cidade: " . $cidade . "<br>" . "Sexo: " . $radios;
    }
}else{
    echo"nao clicou em enviar";
}
?>