<?php
   
   if(isset($_POST['enviar'])){
   $nome = $_POST['nome'];
    echo $nome;
   }else{
    echo "nao clicou no botao";
   }
?>