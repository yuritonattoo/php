<?php
if( isset( $_POST['enviar'])){
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $numeroCelular = $_POST['numeroCelular'];
    $telefoneFixo = $_POST['telefoneFixo'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $unidadeFederal = $_POST['unidadeFederal'];
    $status = $_POST['status'];

if(empty(trim($nome))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($email))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($cpf))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($numeroCelular))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($telefoneFixo))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($logradouro))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($numero))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($cep))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($bairro))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($cidade))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($unidadeFederal))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";

    }else if(empty(trim($status))){
        echo "<script>  alert('campo em branco');window.location.href='../cadastroFornecedor.php'; </script>";
    }else {
    echo "Nome: " . $nome . "<br>" . "CPF: " . $cpf . "<br>" . "E-mail: " . $email . "<br>" . "Numero de Celular: " . $numeroCelular . "<br>" . "Logradouro: " . $logradouro . "<br>" ."Telefone Fixo: " . $telefoneFixo . "<br>" . "CEP: " . $cep . "<br>" . "Cidade: " . $cidade . "<br>" . "Status: " . $status . "<br>" . "Bairro: " . $bairro . "<br>" . "UF: " . $unidadeFederal;
    }
}else{
echo"nao clicou em enviar";
}





?>