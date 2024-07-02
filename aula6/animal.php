<?php

    require_once  "Camelo.php";

    //Teste() camelo = new Teste();
    $camelo = new Camelo();

    if(isset($_POST['enviar'])){
        echo $camelo->imprimirAtributos();

    }

    echo $camelo -> getNome();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>Olá, mundo!</title>
  </head>
  <body>
   
<div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">assunto</label>
            <input type="text" name="assunto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu assunto">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">bairro</label>
            <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu bairro">
        </div>
        <input type="submit" value="Enviar" name="enviar"class="btn btn-primary">   
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>