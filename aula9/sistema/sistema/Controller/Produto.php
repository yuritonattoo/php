<?php

    __DIR__ . "/../../vendor/autoload.php";

class Produto
{
   private $nome;
   private $preco;
   private $categoria;
   private $foto;
   private $foto_tipo;
   private $foto_tamanho;
   private $mensagem;

    //alt inser command n
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getFotoTipo()
    {
        return $this->foto_tipo;
    }

    /**
     * @param mixed $foto_tipo
     */
    public function setFotoTipo($foto_tipo)
    {
        $this->foto_tipo = $foto_tipo;
    }

    /**
     * @return mixed
     */
    public function getFotoTamanho()
    {
        return $this->foto_tamanho;
    }

    /**
     * @param mixed $foto_tamanho
     */
    public function setFotoTamanho($foto_tamanho)
    {
        $this->foto_tamanho = $foto_tamanho;
    }

    /**
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    //Instanciar Conexao
    public function __construct()
    {
        $this->con = new Conexao();
        $this->objfcn = new Funcoes();
    }

    //Método para Inserir os dados
    function queryInsert($dados)
    {
        try {
            $this->nome = $dados["nome"];
            $this->preco = $dados["preco"];
            $this->categoria = $dados["categoria"];
            $this->mensagem = $dados["mensagem"];

            //Cadastrar Imagem
            $md5 = md5(time());
            $this->foto = $md5 . $_FILES["foto"]["name"];
            $this->foto_tamanho = $_FILES["foto"]["size"];
            $this->foto_tipo = $_FILES["foto"]["type"];

            //Diretório
            $caminho = __DIR__ . "/imagem/";

            if( strpos($this->foto_tipo, "png") && $this->foto_tamanho < 10000000000000 )
            {
                move_uploaded_file($_FILES["foto"]["tmp_name"] , $caminho . $this->foto );

            $cst = $this->con->conectar()->prepare("INSERT INTO produto (nome, preco , categoria , foto , mensagem) VALUES (:nome, :preco , :categoria, :foto , :mensagem) ");

            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":preco", $this->preco, PDO::PARAM_INT);
            $cst->bindParam(":categoria", $this->categoria, PDO::PARAM_STR);
            $cst->bindParam(":foto", $this->foto, PDO::PARAM_STR);
            $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);

            }
            else
            {
                echo "<script>alert('Apenas Imagem PNG e Menor do que 1 Mega');top.location.href='produtos.php';</script>";
            }

            if ($cst->execute()) {
                return "ok";
            } else {
                echo "Não deu";
            }
        }catch (PDOException $ex)
        {
            echo $ex;
        }

    }

    //Imprmir Produtos
    public function selecionaProduto()
    {
        try
        {
            $cst = $this->con->conectar()->prepare("SELECT * FROM produto");
            $cst->execute();

            return $cst->fetchAll();

        }
        catch (PDOException $ex)
        {
            echo $ex;
        }
    }
    public function editarProduto($dados){
        try{

                $this->id = $this->objfn->base64($dados['func'],2);
                $this->nome = $dados['nome'];
                $this->preco = $dados['preco'];
                $this->mensagem = $dados['mensagem'];
                $this->categoria = $dados['categoria'];
                $this->foto = $dados['foto'];


                $cst = $this->con->conectar()->prepare("UPDATE clientes SET nome = :nome ,preco = :preco, mensagem = :mensagem, categoria= :categoria, foto = :foto WHERE id = :idCliente");
                $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $cst->bindParam(":preco", $this->preco, PDO::PARAM_INT);
                $cst->bindParam(":categoria", $this->categoria, PDO::PARAM_STR);
                $cst->bindParam(":foto", $this->foto, PDO::PARAM_STR);
                $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);
                
                
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
    
                $cst = $this->con->conectar()->prepare("DELETE FROM produto WHERE id= :idProdutos");
                $cst->bindParam(":idProduto" , $this->id, PDO::PARAM_INT);
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