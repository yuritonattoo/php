<?php
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        mail($email, $assunto . $nome, $mensagem);

    echo "<script> alert ('Email enviado com sucesso');window.location.href='../envioEmail.php'; </script>";

    
    } else {
        header("location:../envioEmail.php");
    }
?>