<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    //Acessa
    include_once('config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    // print_r('Email: ' . $email);
    // print_r('Password: ' . $password);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: index.html');
    } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            header('Location: aviso.php');
        }
    }else {
    //Não acessa
    header('Location: index.html');
}
?>