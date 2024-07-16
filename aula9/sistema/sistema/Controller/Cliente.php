<?php
require_once "../../vendor/autoload.php";

class Cliente {
    private $id;
    private $nome;
    private $estado;
    private $mensagem;
    private $con;


    

    public function __construct() {
        $this->con = new Conexao();
        $this->objfcn = new Funcoes();
    }
    public function getId()
    {
            return $this->id;
    }
    public function setId($id): self
    {
            $this->id = $id;

            return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
        return $this;
    }

    public function inserirCliente($dados) {
        try {
            $this->nome = $dados['nome'];
            $this->estado = $dados['estado'];
            $this->mensagem = $dados['mensagem'];

            $cst = $this->con->conectar()->prepare("INSERT INTO clientes (nome, estado, mensagem) VALUES (:nome, :estado, :mensagem)");
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":estado", $this->estado, PDO::PARAM_INT);
            $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);

            if ($cst->execute()) {
                return "ok";
            } else {
                return "erro";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function selecionarCliente() {
        try {
            $cst = $this->con->conectar()->prepare("SELECT i.id, i.nome, t.estado, i.mensagem
                                                    FROM clientes i
                                                    JOIN estado t ON t.id = i.estado");
            $cst->execute();

            return $cst->fetchAll(PDO::FETCH_ASSOC); // Retorna um array associativo
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function selecionarEstado() {
        try {
            $cst = $this->con->conectar()->prepare("SELECT id, estado FROM estado");
            $cst->execute();

            return $cst->fetchAll(PDO::FETCH_ASSOC); // Retorna um array associativo
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function selecionaId($dado){
        try{

                $this->id = $this->objfnc->base64($dado, 2); 
                $cst = $this->con->conectar()->prepare("SELECT id, nome, estado, mensagem FROM clientes WHERE id: idCliente");
                $cst->bindParam(":idCliente" , $this->id , PDO::PARAM_INT);
                $cst->execute();

                return $cst->fetch();

        }catch(PDOException $ex) {
                echo $ex;
        }        

}
    public function editarCliente($dados){
        try{

                $this->id = $this->objfnc->base64($dados['func'], 2);
                $this->nome = $dados['nome'];
                $this->estado = $dados['estado'];
                $this->mensagem = $dados['mensagem']; 


                $cst = $this->con->conectar()->prepare("UPDATE clientes SET  nome=:nome, estado=:estado, mensagem=:mensagem WHERE id: idCliente");
                $cst->bindParam(":idCliente" , $this->id , PDO::PARAM_INT);
                $cst->bindParam(":nome" , $this->nome , PDO::PARAM_STR);
                $cst->bindParam(":estado" , $this->estado , PDO::PARAM_STR);
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

                $this->id = $this->objfnc->base64($dado, 2); 
                $cst = $this->con->conectar()->prepare("DELETE FROM clientes WHERE id: idCliente");
                $cst->bindParam(":idCliente" , $this->id , PDO::PARAM_INT);

                if($cst->execute()){
                   return "ok";
                }else{
                   return "não deletou";         
                }
        
        }catch(PDOException $ex) {
                echo $ex;
        }        

}
}
?>
