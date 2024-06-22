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
      <?php require "includes/menu.php"; ?>
        <h1>Cadastro Fornecedor</h1>
   
            <form method="post" action="acao/acaoFornecedor.php">
                <div class="row"> 
                    <div class="col-md-1"> <!-- CODIGO  -->
                        <div class="form-group">
                            <label style="font-weight: bold" for="exampleInputName1">Código</label>
                            <input class="form-control" name="codigo" type="text" placeholder="34" readonly> 
                        </div>
                    </div>
                    <div class="col-md-5"> <!-- NOME  -->
                        <div class="form-group">
                            <label style="font-weight: bold" for="exampleInputName1">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome Completo do Cliente">
                        </div>
                    </div>   
                    <div class="col-md-4">
                        <div class="form-group"> <!-- EMAIL  -->
                            <label style="font-weight: bold" for="exampleInputName1">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="cliente@dominio.com">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"> <!-- CPF  -->
                            <label style="font-weight: bold" for="exampleInputName1">CPF</label>
                            <input type="text" name="cpf" class="form-control" placeholder="Apenas Numeros">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> <!-- NUMERO CELULAR  -->
                        <div class="form-group">
                            <label style="font-weight: bold" for="exampleInputName1">Nº de Celular</label>
                            <input type="text" name="numeroCelular" class="form-control" placeholder="Nº de Celular">
                        </div>
                    </div>   
                    <div class="col-md-2"> <!-- TELEFONE FIXO  -->
                        <div class="form-group">
                            <label style="font-weight: bold" for="exampleInputName1">Telefone Fixo</label>
                            <input type="text" name="telefoneFixo" class="form-control" placeholder="Nº de Telefone">
                        </div>
                    </div>   
                    <div class="col-md-2">
                        <div class="form-group"> <!-- CEP  -->
                            <label style="font-weight: bold" for="exampleInputName1">CEP</label>
                            <input type="text" name="cep" class="form-control" placeholder="ex: 09900-900">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"> <!-- LOGRADOURO  -->
                            <label style="font-weight: bold" for="exampleInputName1">Logradouro</label>
                            <input type="text" name="logradouro" class="form-control" placeholder="ex: Rua jose dos andes/488">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group"> <!-- NUMERO  -->
                            <label style="font-weight: bold" for="exampleInputName1">Nº</label>
                            <input type="text" name="numero" class="form-control" placeholder="Nº">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"> <!-- BAIRRO  -->
                            <label style="font-weight: bold" for="exampleInputName1">Bairro</label>
                            <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group"> <!-- Cidade  -->
                            <label style="font-weight: bold" for="exampleInputName1">Cidade</label>
                            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group"> <!-- UF  -->
                            <label style="font-weight: bold" for="exampleInputName1">UF</label>
                            <input type="text" name="unidadeFederal" class="form-control" placeholder="UF">
                        </div>
                    </div>
                    <div class="col-md-2">
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
                        <input style="float:right" type="submit" name="enviar"  value="CADASTRAR" class="btn btn-outline-success"> 
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