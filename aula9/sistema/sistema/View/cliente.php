<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require "../../vendor/autoload.php";
    $cliente = new Cliente();
    $estado = new Estado();
    $objfn = new Funcoes();
    
    //Cadastrar
    if(isset($_POST['btCadastrar'])){
        
        
        if($cliente->inserirCliente($_POST) == "ok" ){
            echo "inserido com suceso";
            header("Location:cliente.php");
        }else{
            echo "Não deu";
        }
    }
    //Editar
    if(isset($_POST['btAlterar'])){
        
        
        if($cliente->editarCliente($_POST) == "ok" ){
            echo "Editado com sucesso";
            header("Location:?acao=edit?func" . $objfn->base64($_POST["func"], 1));
        }else{
            echo "Erro ao editar";
        }
    }
    //Saber qual é a ação
    if(isset($_GET["acao"]))
    {
        switch($_GET["acao"])
        {
            case "edit" : 
                $func = $cliente->SelecinaId($_GET["func"]); break;
            case "delet" :
                if($cliente->deletarId($_GET["func"]) == "ok")
                {
                    echo "Deletado Com Sucesso!!!!!! :)";
                }
                else
                {
                    echo "erro ao deletar";
                }
                break;
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
    <div class="row" style="margin-top:50px;"> 
        <div class="col-md-4"><h3>Clientes Cadastrados</h3> </div>
        <div class="col-md-8">  <a style="float:right;"button type="button" href="../acao/formCliente.php" class="btn btn-success">Cadastrar Cliente</button></a></div>
    </div>


    <table class="table table-striped" style="margin-top:20px; background-color:#DCDCDC;">
        <thead style="background-color:#808080">
            <tr>
                <td scope="col" style="font-weight:bold;">ID</td>
                <td scope="col" style="font-weight:bold;">Nome</td>
                <td scope="col" style="font-weight:bold;">Estado</td>
                <td scope="col" style="font-weight:bold;">Mensagem</td>
                <td scope="col" style="font-weight:bold;">Editar</td>
                <td scope="col" style="font-weight:bold;">Deletar</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $contagem = 1;
                foreach($cliente->selecionarCliente() as $resultado ) {
            ?>
            <tr>
                <td scope="row" style="font-weight:bold;"> <?php echo $contagem++;?></td>
                <td scope="row"> <?php echo $resultado['nome']; ?> </td>
                <td scope="row"> <?php echo $resultado['estado']; ?> </td>
                <td scope="row"> <?php echo $resultado['mensagem']; ?> </td>
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