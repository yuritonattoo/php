<?php

    session_start();

    if(isset($_SESSION['logar'])){
        header("location: ../index.php");
        session_destroy();

    } else {
        header("Location: ../index.php");
        session_destroy();
    }