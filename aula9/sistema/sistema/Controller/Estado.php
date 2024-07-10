<?php
     require_once "../../vendor/autoload.php";

     class Estado {

        private $estado;

        /**
         * Get the value of nome
         */
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of nome
         */
        public function setEstado($estado): self
        {
                $this->estado = $estado;

                return $this;
        }

        //Chamar Conexao com Banco de dados
        public function __construct (){
            $this->con = new Conexao();
        }

        //Método para Inserir Cliente
        public function inserirEstado($dados){
         
         try{
            $this->estado = $dados['estado'];

            $cst =  $this->con->conectar()->prepare("INSERT INTO estado (estado) VALUES (:estado) ");
            $cst->bindParam(":estado" , $this->estado , PDO::PARAM_STR);

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
        public function selecionarEstado(){
         
                try{

                   $cst =  $this->con->conectar()->prepare("SELECT * FROM estado");
                   $cst->execute();

                   return $cst->fetchAll();
       
                }catch(PDOExecption $ex){
                   echo $ex;
                }
       
               }
     }

?>