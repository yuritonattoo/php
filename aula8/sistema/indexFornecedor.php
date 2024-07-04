<?php

    require_once "Sistema.php";
    require_once "Fornecedor.php";

    $sistema = new Sistema ();
    $fornecedor = new Fornecedor ();

    if(isset($_POST['enviar'])){
      echo $fornecedor->atributosFornecedor();

    }
    

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>SISTEMA</title>
  </head>
  <body>
    <div class="container" style="background-color:lightblue; weight:100%;">
    <h1 style="text-align:center;">FORNECEDOR</h1>
    <div class="container">
      <form method="post" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Rua</label>
          <input type="text" name="rua" class="form-control" placeholder="Rua">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bairro</label>
          <input type="text" name="bairro" class="form-control" placeholder="bairro">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Numero</label>
          <input type="text" name="numero" class="form-control" placeholder="numero">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">CNPJ</label>
          <input type="text" name="cnpj" class="form-control" placeholder="cnpj">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">telefone</label>
          <input type="text" name="telefone" class="form-control" placeholder="telefone">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensagem</label>
          <textarea name="mensagem" class="form-control" rows="3"></textarea>
        </div>
        <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
      </form>
    </div>    
    

</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

