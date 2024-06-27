<?php
if( isset( $_POST['enviar'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $nivel = $_POST['nivel'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $status = $_POST['status'];

        if(empty(trim($nome))){
            echo "<script>  alert('campo em branco1');window.location.href='../cadastroUsuario.php'; </script>";
        
        }else if(empty(trim($cpf))){
            echo "<script>  alert('campo em branco2');window.location.href='../cadastroUsuario.php'; </script>";

        }else if(empty(trim($endereco))){
            echo "<script>  alert('campo em branco3');window.location.href='../cadastroUsuario.php'; </script>";

        }else if(empty(trim($nivel))){
            echo "<script>  alert('campo em branco4');window.location.href='../cadastroUsuario.php'; </script>";

        }else if(empty(trim($email))){
            echo "<script>  alert('campo em branco5');window.location.href='../cadastroUsuario.php'; </script>";

        }else if(empty(trim($senha))){
            echo "<script>  alert('campo em branco6');window.location.href='../cadastroUsuario.php'; </script>";

        }else if(empty(trim($status))){
            echo "<script>  alert('campo em branco7');window.location.href='../cadastroUsuario.php'; </script>";
        }else {
        echo "Nome: " . $nome . "<br>" . "CPF: " . $cpf . "<br>" . "Endereço: " . $endereco . "<br>" . "Nivel: " . $nivel . "<br>" . "E-mail: " . $email . "<br>" . "Senha: " . $senha . "<br>" . "Status: " . $status;
        }
}else{
    echo"CADASTRO CANCELADO";
}


?>