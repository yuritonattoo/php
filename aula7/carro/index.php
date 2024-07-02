<?php

    require_once "Carro.php";
    require_once "Gol.php";
    require_once "Uno.php";

    $carro   = new Carro();
    $gol = new Gol ();
    $uno = new Uno ();

   /* echo "1 - " . $carro->roda . "<br>";
    echo "2 - " . $carro->teto . "<br>";
    echo "3 - " . $carro->combustao . "<br>";
    echo "4 - " . $carro->banco . "<br>";
    echo "5 - " . $carro->estepe . "<br>" . "<br>";

    echo "GOL" . "<br>";
    echo "Chassi: " . $gol->chassi . "<br>";
    echo "Roda: " . $gol->roda . "<br>";
    echo "Teto: " . $gol->teto . "<br>";
    echo "Combustão: " . $gol->combustao . "<br>";
    echo "Banco: " . $gol->banco . "<br>";
    echo "Estepe: " . $gol->estepe . "<br>" . "<br>";

   echo "UNO" . "<br>";
    echo "Chassi: " . $uno->chassi . "<br>";
    echo "Roda: " . $uno->roda . "<br>";
    echo "Teto: " . $uno->teto . "<br>";
    echo "Combustão: " . $uno->combustao . "<br>";
    echo "Banco: " . $uno->banco . "<br>";
    echo "Estepe: " . $uno->estepe . "<br>"; */

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="cabaco" style="background-color:lightblue; weight:100%;">
        <div class="container">
   <h3>CARRO </h3>
    <h4>
        <?php
            echo "1 - " . $carro->roda . "<br>";
            echo "2 - " . $carro->teto . "<br>";
            echo "3 - " . $carro->combustao . "<br>";
            echo "4 - " . $carro->banco . "<br>";
            echo "5 - " . $carro->estepe . "<br>" . "<br>";
        ?> 
    </h4>
    <h4>
        <?php
            echo "GOL" . "<br>";
        ?>
    </h4>
    <label>
        <?php
           
            echo "Chassi: " . $gol->chassi . "<br>";
            echo "Roda: " . $gol->roda . "<br>";
            echo "Teto: " . $gol->teto . "<br>";
            echo "Combustão: " . $gol->combustao . "<br>";
            echo "Banco: " . $gol->banco . "<br>";
            echo "Estepe: " . $gol->estepe . "<br>" . "<br>";

         ?>
    </label>
    <h4>
        <?php
            echo "UNO" . "<br>";
        ?>
    </h4>
    <label>
        <?php
      
            echo "Chassi: " . $uno->chassi . "<br>";
            echo "Roda: " . $uno->roda . "<br>";
            echo "Teto: " . $uno->teto . "<br>";
            echo "Combustão: " . $uno->combustao . "<br>";
            echo "Banco: " . $uno->banco . "<br>";
            echo "Estepe: " . $uno->estepe . "<br>"; ;
        
        ?>
    </label>
    </div>
    </div>
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>