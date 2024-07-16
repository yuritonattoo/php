<?php

    require "../../vendor/autoload.php";
    $fornecedor = new Fornecedor();


    if(isset($_POST['enviar'])){
        
        if($fornecedor->inserirFornecedor($_POST) == "ok" ){
            echo "inserido com suceso";
            header("Location: ../View/fornecedor.php");
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
    <?php require "../Includes/menu.php" ?>
    <div class="row"style="margin-top:50px;">
        <div class="col-md-6" > <h1>Cadastro Fornecedor</h1> </div>
        <div class="col-md-6"><a style="float:right;"button type="button" href="../view/fornecedor.php" class="btn btn-success">Lista Fornecedores</button></a>   </div>
    </div>
    
    <form method="post" action=""> 
        <div class="form-group">
            <label for="exampleInputEmail1">Nome do Fornecedor</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome do Fornecedor">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Pais</label>
                <select name="pais" class="form-control">
                    <?php
                    foreach($fornecedor->selecionarPais() as $resultado1) 
                    { ?>
                    <option value="<?php echo $resultado1['id']; ?>">
                        <?php echo $resultado1['pais']; ?>
                    </option>
                    <?php } ?>
                </select>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlSelect1">Estado</label>
                <select name="estado" class="form-control">
                    <?php
                    foreach($fornecedor->selecionarEstado() as $resultado1)
                    { ?>
                    <option value="<?php echo $resultado1['id']; ?>">
                        <?php echo $resultado1['estado']; ?>
                    </option>
                    <?php } ?>
                </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Cidade</label>
                <select name="cidade" class="form-control">
                    <?php
                    foreach($fornecedor->selecionarCidade() as $resultado1)
                    { ?>
                    <option value="<?php echo $resultado1['id']; ?>">
                        <?php echo $resultado1['cidade']; ?>
                    </option>
                    <?php } ?>
                </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pais</label>
                <select name="pais" class="form-control">
                    <?php
                    foreach($fornecedor->selecionarPais() as $resultado1) 
                    { ?>
                    <option value="<?php echo $resultado1['id']; ?>">
                        <?php echo $resultado1['pais']; ?>
                    </option>
                    <?php } ?>
                </select>
        </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea name="mensagem" class="form-control" rows="3"></textarea>
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
        </form>

        
         <?php require "../Includes/rodape.php" ?>
    </div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>