<?php
    session_start();
    print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: index.html');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackeado</title>
</head>
<style>
    body{
        overflow: hidden;
    }
    main{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: Arial, Helvetica, sans-serif;
        height: 100vh;
    }

    img{
        width: 250px;
    }

    h1 {
        text-transform: uppercase;
    }
</style>
<body>
    <main>
        <img src="img/Hacker Icon.png" alt="">
        <h1>Você foi hackeado</h1>
        <p>Alguns hacker mal intencionados clonam sites famosos para roubarem seus dados.</p>

        <a href="logout.php">Sair</a>
    </main>
</body>
</html>