<?php

class Camelo {

    private $nome;
    private $email;
    private $assunto;
    private $bairro;

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
     * Get the value of assunto
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Set the value of assunto
     */
    public function setAssunto($assunto): self
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Get the value of bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     */
    public function setBairro($bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }
    public function imprimirAtributos(){
        $this->nome = $_POST['nome'];
        $this->email = $_POST['email'];
        $this->assunto = $_POST['assunto'];
        $this->bairro = $_POST['bairro'];
        echo $this->getNome() ."<br>" .$this->getEmail() ."<br>" . $this->getAssunto() . "<br>". $this->getBairro() ;
        


     }
}