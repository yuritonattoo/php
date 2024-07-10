<?php
     require_once "../../vendor/autoload.php";

     class Cidade {

        private $cidade;

        /**
         * Get the value of nome
         */
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of nome
         */
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        //Chamar Conexao com Banco de dados
        public function __construct (){
            $this->con = new Conexao();
        }

        //Método para Inserir Cliente
        public function inserirCidade($dados){
         
         try{
            $this->cidade = $dados['cidade'];

            $cst =  $this->con->conectar()->prepare("INSERT INTO cidade (cidade) VALUES (:cidade) ");
            $cst->bindParam(":cidade" , $this->cidade , PDO::PARAM_STR);

            if($cst->execute() ){
                  return "ok";
            } else{
               echo "Não deu";
            }

         }catch(PDOExecption $ex){
            echo $ex;
         }

        }
        //Método para Listar Clientes
        public function selecionarCidade(){
         
                try{

                   $cst =  $this->con->conectar()->prepare("SELECT * FROM cidade");
                   $cst->execute();

                   return $cst->fetchAll();
       
                }catch(PDOExecption $ex){
                   echo $ex;
                }
       
               }
     }

?>