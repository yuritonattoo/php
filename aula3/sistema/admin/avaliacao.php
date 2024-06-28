<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <title>Avaliação</title>
    </head>
    <body>

    <form method="post" action="acao/acaoAvaliacao.php">
<div class="container"> 
    <div class="row"> <!-- Razão Social  -->
        <div class="col-md-12"> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="razao" class="form-control" placeholder="Razao Social">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <!-- CNPJ  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="cnpj" class="form-control" placeholder="CNPJ">
            </div>  
        </div>


        <div class="col-md-6"> <!-- inscrição estadual  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="estadual" class="form-control" placeholder="inscrição estadual">
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <!-- Logradouro  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="logradouro" class="form-control" placeholder="logradouro">
            </div>  
        </div>


        <div class="col-md-6"> <!-- Bairro  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="bairro" class="form-control" placeholder="bairro">
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <!-- Municipio  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="municipio" class="form-control" placeholder="municipio">
            </div>  
        </div>


        <div class="col-md-6"> <!-- UF  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="uf" class="form-control" placeholder="uf">
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <!-- CEP  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="cep" class="form-control" placeholder="cep">
            </div>  
        </div>


        <div class="col-md-6"> <!-- Telefone  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="telefone" class="form-control" placeholder="telefone">
            </div>  
        </div>
    </div>

    <div class="row"> <!-- email  -->
        <div class="col-md-12"> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
    </div>

    <h3 style="font-weight: lighter;"> Representante(s) da Empresa para Contato</h3>
    <h4 style="font-weight: lighter;">Representante</h4>

    <div class="row">
        <div class="col-md-6"> <!-- Nome  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="nome" class="form-control" placeholder="nome">
            </div>  
        </div>


        <div class="col-md-6"> <!-- Função  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="funcao" class="form-control" placeholder="função">
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <!-- telefone  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="telefone2" class="form-control" placeholder="telefone">
            </div>  
        </div>


        <div class="col-md-6"> <!-- email  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="email2" class="form-control" placeholder="email">
            </div>  
        </div>
    </div>

    <h4 style="font-weight: lighter;">Representante</h4>

    <div class="row">
        <div class="col-md-6"> <!-- Nome  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="nome2" class="form-control" placeholder="nome">
            </div>  
        </div>


        <div class="col-md-6"> <!-- Função  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="funcao2" class="form-control" placeholder="função">
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <!-- telefone  -->   
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="telefone3" class="form-control" placeholder="telefone">
            </div>  
        </div>


        <div class="col-md-6"> <!-- email  --> 
            <div class="form-group">
                <label style="font-weight: bold" for="exampleInputEmail1"></label>
                <input type="text" name="email3" class="form-control" placeholder="email">
            </div>  
        </div>
    </div>
    <input type="submit" value="Enviar" name="enviar" style="margin-top:20px; margin-left:0px" class="btn btn-dark"></button>
</div>