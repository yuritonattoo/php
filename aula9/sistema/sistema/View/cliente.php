<?php

    require "../../vendor/autoload.php";
    $cliente = new Cliente();
    $conexao = new Conexao();

    if(isset($_POST['enviar'])){
        
        
        if($cliente->inserirCliente($_POST) == "ok" ){
            echo "inserido com suceso";
        }else{
            echo "Não deu";
        }


    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Olá, mundo!</title>
</head>
<body>
<h1>Olá, mundo!</h1>



<div class="container"> 

    <form method="post" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
        </div>

        <div class="form-group">
                <label for="exampleFormControlSelect1">Select de exemplo</label>
                <select name="estado" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
                <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
        </form>

        <?php

           foreach($cliente->selecionarCliente() as $resultado ){
                echo $resultado['nome'];
                echo $resultado['estado'];
                echo $resultado['mensagem'];

           }




        ?>

</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>