<?php
     require_once "../../vendor/autoload.php";

     class Pais {

        private $pais;

        /**
         * Get the value of nome
         */
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Set the value of nome
         */
        public function setPais($pais): self
        {
                $this->pais = $pais;

                return $this;
        }

        //Chamar Conexao com Banco de dados
        public function __construct (){
            $this->con = new Conexao();
        }

        //Método para Inserir Cliente
        public function inserirPais($dados){
         
         try{
            $this->pais = $dados['pais'];

            $cst =  $this->con->conectar()->prepare("INSERT INTO pais (pais) VALUES (:pais) ");
            $cst->bindParam(":pais" , $this->pais , PDO::PARAM_STR);

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
        public function selecionarPais(){
         
                try{

                   $cst =  $this->con->conectar()->prepare("SELECT * FROM pais");
                   $cst->execute();

                   return $cst->fetchAll();
       
                }catch(PDOExecption $ex){
                   echo $ex;
                }
       
               }
     }

?>