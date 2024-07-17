<?php
     require_once "../../vendor/autoload.php";

     class Fornecedor {

        private $id;
        private $nome;
        private $pais;
        private $estado;
        private $cidade;
        private $telefone;
        private $mensagem;

         /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of estado
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
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         */
        public function setEstado($estado): self
        {
                $this->estado = $estado;

                return $this;
        }

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

        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of nome
         */
        public function setTelefone($telefone): self
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of mensagem
         */
        public function getMensagem()
        {
                return $this->mensagem;
        }

        /**
         * Set the value of mensagem
         */
        public function setMensagem($mensagem): self
        {
                $this->mensagem = $mensagem;

                return $this;
        }

       

        //Chamar Conexao com Banco de dados
        public function __construct (){
            $this->con = new Conexao();
            $this->objfn = new Funcoes();
        }

        //Método para Inserir Cliente
        public function inserirFornecedor($dados){
         
         try{
            $this->nome = $dados['nome'];
            $this->pais = $dados['pais'];
            $this->estado = $dados['estado'];
            $this->cidade = $dados['cidade'];
            $this->telefone = $dados['telefone'];
            $this->mensagem = $dados['mensagem'];

            $cst =  $this->con->conectar()->prepare("INSERT INTO fornecedor (nome,pais, estado, cidade, telefone, mensagem) VALUES (:nome, :pais, :estado, :cidade, :telefone, :mensagem) ");
            $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
            $cst->bindParam(":pais" , $this->pais , PDO::PARAM_STR);
            $cst->bindParam(":estado" , $this->estado , PDO::PARAM_INT);
            $cst->bindParam(":cidade" , $this->cidade , PDO::PARAM_STR);
            $cst->bindParam(":telefone" , $this->telefone , PDO::PARAM_STR);
            $cst->bindParam(":mensagem" , $this->mensagem , PDO::PARAM_STR);

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
        public function selecionarFornecedor(){
         
                try{

                        $cst =  $this->con->conectar()->prepare("SELECT i.id, i.nome, i.mensagem, t.estado, p.pais, c.cidade, i.telefone
                        FROM fornecedor i
                        join estado t on t.id = i.estado
                        join pais p on p.id = i.pais
                        join cidade c on c.id = i.cidade");

                        $cst->execute();

                        return $cst->fetchAll();

                }catch(PDOExecption $ex){
                        echo $ex;
                }
        }

        public function selecionarPais()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT id, pais FROM pais ");
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        public function selecionarEstado()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT id, estado FROM estado ");
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        public function selecionarCidade()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT id, cidade  FROM cidade ");
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        public function selecionarTelefone()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT id, telefone  FROM fornecedor ");
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        //Método para Recuper o ID do Banco de Dados
        public function selecionaId($dado) {
                try{
                    $this->id = $this->objfn->base64($dado, 2);
                    $cst = $this->con->conectar()->prepare("SELECT id, nome, estado, mensagem FROM fornecedor WHERE id = :idFornecedor ");
                    $cst->bindParam(":idFornecedor", $this->id, PDO::PARAM_INT);
    
                        $cst->execute();
    
                        return $cst->fetch();
                }
                catch(PDOException $ex){
                    echo $ex;
                }
            }

        //Método Editar
        public function editarFornecedor($dados){
                try{

                        $this->id = $this->objfn->base64($dados['func'],2);
                        $this->nome = $dados['nome'];
                        $this->pais = $dados['pais'];
                        $this->estado = $dados['estado'];
                        $this->cidade = $dados['cidade'];
                        $this->telefone = $dados['telefone'];
                        $this->mensagem = $dados['mensagem']; 

                        $cst = $this->con->conectar()->prepare("UPDATE fornecedor SET nome = :nome ,estado = :estado, mensagem = :mensagem WHERE id = :idFornecedor");
                        $cst->bindParam(":idFornecedor" , $this->id , PDO::PARAM_INT);
                        $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
                        $cst->bindParam(":pais" , $this->pais , PDO::PARAM_STR);
                        $cst->bindParam(":estado" , $this->estado , PDO::PARAM_STR);
                        $cst->bindParam(":cidade" , $this->cidade , PDO::PARAM_STR);
                        $cst->bindParam(":telefone" , $this->telefone , PDO::PARAM_STR);
                        $cst->bindParam(":mensagem" , $this->mensagem , PDO::PARAM_STR);
                        
                        if($cst->execute()){
                                return "ok";
                        }else{
                                echo "Não editou";
                        }

                }catch(PDOException $ex) {
                        echo $ex;
                }        

        }
        //Método para Deletar 
        public function deletarId($dado){
                try{
                        $this->id = $this->objfn->base64($dado, 2);
            
                        $cst = $this->con->conectar()->prepare("DELETE FROM Fornecedor WHERE id= :idFornecedor");
                        $cst->bindParam(":idFornecedor" , $this->id, PDO::PARAM_INT);
                            if($cst->execute()){
                                return "ok";
                            } else{
                                return "Não deu";
                            }
                        }catch(PDOException $ex){
                            echo $ex;
                        }
        }
       
} 

?>