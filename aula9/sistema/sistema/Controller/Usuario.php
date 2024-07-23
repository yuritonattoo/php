<?php
     require_once "../../vendor/autoload.php";

     class Usuario {

        private $id;
        private $nome;
        private $email;
        private $nivel;
        private $senha;
        private $mensagem;
        const REGISTROS_POR_PAGINA = 5;

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
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of nivel
         */
        public function getNivel()
        {
                return $this->nivel;
        }

        /**
         * Set the value of nivel
         */
        public function setNivel($nivel): self
        {
                $this->nivel = $nivel;

                return $this;
        }

        /**
         * Get the value of senha
         */
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         */
        public function setSenha($senha): self
        {
                $this->senha = $senha;

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
        public function inserirUsuario($dados){
         
         try{
            $this->nome = $dados['nome'];
            $this->email = $dados['email'];
            $this->nivel = $dados['nivel'];
            //$this->senha = password_hash($dados['senha'], PASSWORD_DEFAULT);
            $this->senha = sha1($dados['senha']);
            $this->mensagem = $dados['mensagem'];

            $cst =  $this->con->conectar()->prepare("INSERT INTO usuario (nome,email,nivel,senha,mensagem) VALUES (:nome,:email,:nivel,:senha,:mensagem) ");
            $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
            $cst->bindParam(":email" , $this->email , PDO::PARAM_STR);
            $cst->bindParam(":nivel" , $this->nivel , PDO::PARAM_STR);
            $cst->bindParam(":senha" , $this->senha , PDO::PARAM_STR);
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
        public function selecionarUsuario(){
        
                try{
                        $cst =  $this->con->conectar()->prepare("SELECT * FROM usuario");

                        $cst->execute();

                        return $cst->fetchAll();

                }catch(PDOExecption $ex){
                        echo $ex;
                }
        }
        //Método para Recuper o ID do Banco de Dados
        public function selecionaId($dado) {
                try{
                    $this->id = $this->objfn->base64($dado, 2);
                    $cst = $this->con->conectar()->prepare("SELECT id, nome, email, nivel, senha, mensagem FROM usuario WHERE id = :idCliente ");
                    $cst->bindParam(":idCliente", $this->id, PDO::PARAM_INT);
    
                        $cst->execute();
    
                        return $cst->fetch();
                }
                catch(PDOException $ex){
                    echo $ex;
                }
            }

        
        //Método Editar
        public function editarUsuario($dados){
                try{

                        $this->id = $this->objfn->base64($dados['func'],2);
                        $this->nome = $dados['nome'];
                        $this->email = $dados['email'];
                        $this->nivel = $dados['nivel'];
                        $this->senha = sha1($dados['senha']);
                        $this->mensagem = $dados['mensagem']; 

                        $cst = $this->con->conectar()->prepare("UPDATE usuario SET nome = :nome , email = :email, nivel = :nivel, senha = :senha, mensagem = :mensagem WHERE id = :idCliente");
                        $cst->bindParam(":idCliente" , $this->id , PDO::PARAM_INT);
                        $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
                        $cst->bindParam(":email" , $this->email , PDO::PARAM_STR);
                        $cst->bindParam(":nivel" , $this->nivel , PDO::PARAM_STR);
                        $cst->bindParam(":senha" , $this->senha , PDO::PARAM_STR);
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
            
                        $cst = $this->con->conectar()->prepare("DELETE FROM usuario WHERE id= :idCliente");
                        $cst->bindParam(":idCliente" , $this->id, PDO::PARAM_INT);
                            if($cst->execute()){
                                return "ok";
                            } else{
                                return "Não deu";
                            }
                        }catch(PDOException $ex){
                            echo $ex;
                        }
        }
        //Método Logar
        public function logarUsuarios($dados){

                $this->email = $dados["email"];
                $this->senha = sha1( $dados["senha"] );

                try{ 
                        $cst = $this->con->conectar()->prepare("SELECT id, email, senha  FROM usuario WHERE email = :email AND senha = :senha ");
                        $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
                        $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);

                                $cst->execute();

                                if($cst->rowCount() == 0 ){
                                        header("Location:../View/logar.php");
                                } else{
                                        session_start();
                                        $rst = $cst->fetch();
                                        $_SESSION['logado'] = "logar";
                                        $_SESSION['func'] = $rst['id'];
                                        header("Location:../View/home.php");
                                }
                        }
                        catch(PDOException $ex){
                                echo $ex;
                        }
        }
        //Método Verificar Usuario imprime a Sessao de dados
        public function verificaUsuario($dado)
        {
                $cst = $this->con->conectar()->prepare("SELECT id,email,senha,nivel,nome FROM usuario WHERE id=:id");
                $cst->bindParam(":id", $dado, PDO::PARAM_INT);

                $cst->execute();

                $rst = $cst->fetch();

                $_SESSION["nome"] = $rst["nome"];
                $_SESSION["nivel"] = $rst["nivel"];
        }
        //Método para Deslogar Usuário
        public function deslogarUsuarios(){
                session_destroy();
                header("Location: ../View/logar.php");
        }
         // Método para Obter usuários
        public function obterUsuariosPaginados($paginaAtual)
        {
            try {
                $registrosPorPagina = self::REGISTROS_POR_PAGINA;
                $offset = max(($paginaAtual - 1) * $registrosPorPagina, 0);

                echo "Debug: Página Atual: $paginaAtual, Offset: $offset<br>";
                echo "Debug: Consulta SQL: SELECT * FROM usuario ORDER BY id ASC LIMIT $offset, $registrosPorPagina<br>";

                $cst = $this->con->conectar()->prepare("SELECT * FROM usuario ORDER BY id ASC LIMIT $offset, $registrosPorPagina");
                //SELECT * FROM usuario ORDER BY id LIMIT 3, 5

                $cst->execute();

                $usuarios = $cst->fetchAll(PDO::FETCH_ASSOC);

                echo "Debug: Número de Registros Retornados: " . count($usuarios) . "<br>";

                return $usuarios;
            } catch (PDOException $ex) {
                echo 'Erro ao obter usuários paginados: ' . $ex->getMessage();
            }
        }
        // Método para contar o total de usuários
        public function contarTotalUsuarios()
        {
            try {
                $cst = $this->con->conectar()->prepare("SELECT COUNT(*) AS total FROM usuario");
                $cst->execute();
                $resultado = $cst->fetch(PDO::FETCH_ASSOC);
                return $resultado['total'];
            } catch (PDOException $ex) {
                echo $ex;
            }
        }


} 

?>