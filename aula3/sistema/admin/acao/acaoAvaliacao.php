<?php
if( isset( $_POST['enviar'])){

    $razao = $_POST['razao'];
    $cnpj = $_POST['cnpj'];
    $estadual = $_POST['estadual'];
    $logradouro = $_POST['logradouro'];
    $municipio = $_POST['municipio'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];
    $telefone2 = $_POST['telefone2'];
    $email2 = $_POST['email2'];
    $nome2 = $_POST['nome2'];
    $funcao2 = $_POST['funcao2'];
    $telefone3 = $_POST['telefone3'];
    $email3 = $_POST['email3'];
    
    if(empty(trim($razao))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($cnpj))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($estadual))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($logradouro))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($municipio))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($uf))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($cep))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($telefone))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($email))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($nome))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($funcao))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($telefone2))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($email2))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($nome2))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($funcao2))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($telefone3))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    }else if(empty(trim($email3))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastrocliente.php'; </script>";
    } else {
        echo "Razao: " . $razao . "<br>" . "CNPJ: " . $cnpj . "<br>" . "ESTADUAL: " . $estadual . "<br>" . "LOGRADOURO: " . $logradouro . "<br>" . "MUNICIPIO: " . $municipio . "<br>" . "UF: " . $uf . "<br>" . "CEP: " . $cep . "<br>" . "TELEFONE: " . $telefone . "<br>" . "EMAIL: " . $email . "<br>" . "NOME: " . $nome  . "<br>" . "FUNCAO: " . $funcao .  "<br>" . "SEGUNDO TELEFONE: " . $telefone2 .  "<br>" . "SEGUNDO EMAIL: " . $email2  . "<br>" . "SEGUNDO NOME: " . $nome2 .  "<br>" . "SEGUNDA FUNCAO: " . $funcao2  . "<br>" . "TERCEIRO TELEFONE: " . $telefone3  . "<br>" . "TERCEIRO EMAIL: " . $email3;
    }
    }else{
        echo"nao clicou em enviar";
    }

?>