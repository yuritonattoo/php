<?php

    require "../../vendor/autoload.php";
    $estado = new Estado();
    $conexao = new Conexao();

    if(isset($_POST['enviar'])){
        
        
        if($estado->inserirEstado($_POST) == "ok" ){
            echo "inserido com suceso";
            header("Location:estado.php");
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

<title>Sistema</title>
</head>
<body>

<div class="container" style="margin-top:20px">
    <?php require "../includes/menu.php" ?>
    <h3>Cadastro Estado</h3> 

    <form method="post" action="">

    <div class="form-group">
                <label for="exampleFormControlSelect1">Selecione o Estado</label>
                <select name="estado" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">RS</option>
                    <option value="2">SC</option>
                    <option value="3">PR</option>
                    <option value="4">SP</option>
                    <option value="5">MG</option>
                </select>
            </div>
            <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
        </form>

    <table class="table table-striped" style="margin-top:20px; background-color:#DCDCDC;">
        <thead style="background-color:#808080">
            <tr>
                <td scope="col" style="font-weight:bold;">ID</td>
                <td scope="col" style="font-weight:bold;">Estado</td>
                <td scope="col" style="font-weight:bold;">Editar</td>
                <td scope="col" style="font-weight:bold;">Deletar</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $contagem = 1;
                foreach($estado->selecionarEstado() as $resultado ) {
            ?>
            <tr>
                <td scope="row" style="font-weight:bold;"> <?php echo $contagem++;?></td>
                <td scope="row"> <?php echo $resultado['estado']; ?> </td>
                <td><button type="button" class="btn btn-info">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Deletar</button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>