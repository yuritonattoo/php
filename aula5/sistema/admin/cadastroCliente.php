<!DOCTYPE html>
<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulario!</title>
  </head>
  <body>

    <div class="container">
      <?php 
      require "includes/menu.php"; 
      session_start();

      if(  isset($_SESSION['logar'] )){
        echo "Bem vindo";
      } else {
        header("Location: ../index.php");
        session_destroy();
      }
      
      ?>
    <h1>Cadastro cliente!</h1>
   
    <form method="post" action="acao/acaoCliente.php">

    <div class="row"> <!-- nome  -->
      <div class="col-md-12"> 
      <div class="form-group">
    <label style="font-weight: bold" for="exampleInputEmail1">Nome do cliente</label>
    <input type="text" name="nome" class="form-control" placeholder="Seu nome">
  </div>
      </div>
  </div>


  <div class="row"> <!-- CPF -->
      <div class="col-md-4"> 
      <div class="form-group">
    <label style="font-weight: bold" for="exampleInputEmail1">CPF</label>
    <input type="text" name="cpf" class="form-control" placeholder="000.000.000.00">
  </div>
      </div>

      <div class="col-md-4"> <!-- nascimento  -->
      <div class="form-group">
    <label style="font-weight: bold" for="exampleInputEmail1">Data de nascimento</label>
    <input type="date" name="nascimento" class="form-control" placeholder="">
  </div>
    </div>

      <div class="col-md-4"><!-- sexo  --> 
            <div class="form-check" style="margin-top:20px">
        <input class="form-check-input" type="radio" name="exampleRadios" value="masculino">
        <label style="font-weight: bold" class="form-check-label" for="exampleRadios1"> Masculino
        </label>

      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" value="feminino">
        <label style="font-weight: bold" class="form-check-label" for="exampleRadios2"> Feminino
        </label>
      </div>
    </div>
  </div>

  <div class="row"> <!-- estado civil -->
      <div class="col-md-6"> 
      <div class="form-group">
    <label style="font-weight: bold" for="exampleFormControlSelect1">Estado Civil</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Solteiro</option>
      <option>Casado</option>
      <option>Namorando</option>
      <option>Ficando Serio</option>
      <option>Noitadas</option>
    </select>
  </div>
  </div>

      <div class="col-md-6"> <!-- renda mensal  --> 
          <div class="form-group">
        <label style="font-weight: bold" for="exampleInputEmail1">Renda mensal</label>
        <input type="text" name="rendaMensal" class="form-control" placeholder="0,00">
      </div>  
    </div>
  </div>

  <h3>ENDEREÇO</h3>

  <div class="row"> 
      <div class="col-md-6"> <!-- logradouro  -->
          <div class="form-group">
        <label style="font-weight: bold" for="exampleInputEmail1">Logradouro</label>
        <input type="text" name="logradouro" class="form-control" placeholder="Av. Paulista">
      </div>  
    </div>

      <div class="col-md-3"> <!-- numero --> 
          <div class="form-group">
        <label style="font-weight: bold" for="exampleInputEmail1">Numero</label>
        <input type="text" name="numero" class="form-control" placeholder="Nº">
      </div>  
    </div> 

      <div class="col-md-3"> <!-- complemento  --> 
      <div class="form-group">
        <label style="font-weight: bold" for="exampleInputEmail1">Complemento</label>
        <input type="text" name="complemento" class="form-control" placeholder="Casa, Apto, Loja">
      </div> 
    </div> 
  </div>

  <div class="row">
  <div class="col-md-6"> <!-- estado -->
  <div class="form-group">
    <label  style="font-weight: bold" for="exampleFormControlSelect1">Estado</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Rio Grande do Sul</option>
      <option>Sao Paulo</option>
      <option>Minas Gerais</option>
      <option>Mato Grosso</option>
      <option>Rio de Janeiro</option>
    </select>
  </div>
    </div>

      <div class="col-md-6"> <!-- cidade  -->
      <div class="form-group">
        <label style="font-weight: bold"for="exampleInputEmail1">Cidade</label>
        <input type="text" name="cidade" class="form-control" placeholder="Sao Paulo">
      </div>   
    </div>
    <input type="submit" value="Enviar" name="enviar" style="margin-top:20px; margin-left:15px" class="btn btn-dark"></button>
  </div>

</form>

    <?php require "includes/rodape.php"; ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>