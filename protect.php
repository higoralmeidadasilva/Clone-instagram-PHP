<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acessar está página. <p><a href = \"index.php\">Fazer login</a></p>");

        //header("Location: index.php");
    }
