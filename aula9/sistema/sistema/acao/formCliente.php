<?php

    require "../../vendor/autoload.php";
    $cliente = new Cliente();
    $estado = new Estado();

    if(isset($_POST['enviar'])){
        
        
        if($cliente->inserirCliente($_POST) == "ok" ){
            echo "inserido com suceso";
            header("Location:../view/cliente.php");
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

<div class="container">
<?php require "../includes/menu.php" ?>
    <div class="row"> 
        <div class="col-md-4"><h3>Cadastro Cliente</h3> </div>
        <div class="col-md-8"> <input type="submit" name="enviar" value="Novo Cadastro" class="btn btn-success"></div>
    </div>
    
    

    <form method="post" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
        </div>

        <div class="form-group">
                <label for="exampleFormControlSelect1">Selecione o Estado</label>
                <select name="estado" id="estado" class="form-control" id="exampleFormControlSelect1">
                    <?php foreach($estado->selecionarEstado() as $resultado){ ?>
                        <option value="<?php echo $resultado['id'];?>">
                            <?php echo $resultado['estado'];?>
                        </option>
                   
                        <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Digite sua Mensagem</label>
                <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
        </form>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>