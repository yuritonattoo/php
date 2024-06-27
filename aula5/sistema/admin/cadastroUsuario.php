<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <title>Formulario</title>
    </head>
    <body>
        <div class="container">
            <?php require "includes/menu.php"; 
                session_start();

                if(  isset($_SESSION['logar'] )){
                  echo "Bem vindo";
                } else {
                  header("Location: ../index.php");
                  session_destroy();
                }
            
            ?>
            <h1>Cadastro Usuário</h1>
                <form method="post" action="acao/acaoUsuario.php">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label style="font-weight: bold" for="exampleInputName1">NOME</label>
                                <input class="form-control" name="nome" type="text" placeholder="Informe o Nome"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label style="font-weight: bold" for="exampleInputName1">CPF</label>
                            <input class="form-control" name="cpf" type="text" placeholder="Informe o CPF">
                        </div>
                        <div class="col-md-6">
                            <label style="font-weight: bold" for="exampleInputEmail1">ENDEREÇO</label>
                            <input class="form-control" name="endereco" type="text" placeholder="Informe o endereço">
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"> <!-- STATUS  -->
                                <label style="font-weight: bold" for="exampleFormControlSelect1">NIVEL</label>
                                <select name="nivel" class="form-control">
                                    <option value="--ESCOLHA SEU ESTADO--">--Selecione--</option>
                                    <option value="RS">ADMIN</option>
                                    <option value="SC">PADRÃO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-weight: bold" for="exampleInputName1">EMAIL</label>
                            <input class="form-control" name="email" type="text" placeholder="Informe o email">
                        </div>
                        <div class="col-md-3">
                            <label style="font-weight: bold" for="exampleInputName1">Senha</label>
                            <input class="form-control" name="senha" type="text" placeholder="Informe a Senha">
                        </div>
                        <div class="col-md-3">
                        <div class="form-group"> <!-- STATUS  -->
                                <label style="font-weight: bold" for="exampleFormControlSelect1">Status</label>
                                <select name="status" class="form-control">
                                    <option value="--ESCOLHA SEU ESTADO--">--Selecione--</option>
                                    <option value="RS">ATIVADO</option>
                                    <option value="SC">DESATIVADO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input style="float:right;" type="submit" name="enviar" value="Enviar" class="btn btn-outline-success">
                            <input style="float:right" type="submit" name="enviar2" value="Cancelar" class="btn btn-outline-success"> 
                        </div>
                    </div>
                </form>
            <?php require "includes/rodape.php"; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>