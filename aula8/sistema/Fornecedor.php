<?php
    class Fornecedor extends Sistema
        {
            public $rua;
            public $bairro;
            public $numero;
            public $cnpj;


            //METODO PARA IMPRIMIR ATRIBUTOS
            public function atributosFornecedor  (){
                $this->nome = $_POST['nome'];
                $this->rua = $_POST['rua'];
                $this->bairro = $_POST['bairro'];
                $this->numero = $_POST['numero'];
                $this->cnpj = $_POST['cnpj'];
                $this->telefone = $_POST['telefone'];
                $this->mensagem = $_POST['mensagem'];
                //echo $this->getNome() . " " .  echo $this->getCpf() . " " . echo $this->getMensagem();
                echo "Nome: " . $this->nome . "<br> " . "rua: " . $this->rua . " <br>" . "bairro: " . $this->bairro . " <br>" . "numero: " . $this->numero . " <br>" . "CNPJ: " . $this->cnpj . " <br>" . "telefone: " . $this->telefone . " <br>" . "mensagem: " . $this->mensagem;

            }
        }
?>