<?php
    class Produto extends Sistema
        {
            public $preco;

            public function atributosProduto(){
                $this->nome = $_POST['nome'];
                $this->preco = $_POST['preco'];
                $this->mensagem = $_POST['mensagem'];

                //echo $this->getNome() . " " .  echo $this->getPreco() . " " . echo $this->getMensagem();
                echo "Nome: " . $this->nome . "<br> " . "Preço: " . $this->preco . "<br> " . "Mensagem: " .$this->mensagem;

            }
        }
?>