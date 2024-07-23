<?php

    require "../../vendor/autoload.php";
    $produto = new Produto();
    $objfn = new Funcoes();

    //Cadastrar
    if(isset($_POST['btCadastrar'])){
            
        if($produto->inserirProdutos($_POST) == "ok" ){
            echo "inserido com suceso";
            header("Location: ../View/produtos.php");
        }else{
            echo "Não deu";
        }
    }

    //Editar
    if(isset($_POST['btAlterar'])){
        
        if($produto->editarProduto($_POST) == "ok" ){
            echo "Editado com Sucesso";
            header("Location: ?acao=edit?func" . $objfn->base64($_POST['func'], 1));
            header("Location: ../View/produtos.php");
        }else{
            echo "Não deu";
        }
    }

    //Saber qual é a ação Editar e Deletar
    if(isset($_GET['acao'])){

        switch($_GET['acao']){
            case "edit" : 
                    $func = $produto->selecionaId($_GET['func']);
                break;
            case "delet" : 
                if($produto->deletarId($_GET['func']) == "ok"){
                    echo "Deletado com Sucesso";
                    header ("location: ../produtos.php");
                }else{
                    echo "Não Deletou";
                }
                
                break;
        }

    }


?>