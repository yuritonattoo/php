<?php
    class Cliente extends Sistema
        {
            public $cpf;


            //METODO PARA IMPRIMIR ATRIBUTOS
            public function atributosClientes(){
                $this->nome = $_POST['nome'];
                $this->cpf = $_POST['cpf'];
                $this->mensagem = $_POST['mensagem'];
                //echo $this->getNome() . " " .  echo $this->getCpf() . " " . echo $this->getMensagem();
                echo "Nome: " . $this->nome . "<br> " . "CPF: " . $this->cpf . " <br>" . "Mensagem: " . $this->mensagem;

            }
        }
?>