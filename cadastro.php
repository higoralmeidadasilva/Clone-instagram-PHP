<?php
if (isset($_POST['submit'])) {
    // print_r($_POST['email']);
    // print_r($_POST['name']);
    // print_r($_POST['username']);
    // print_r($_POST['password']);

    include_once('config.php');

    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conexão, "INSERT INTO usuarios(id, email, name, username, password) VALUES ('$id','$email','$name','$username','$password')");

    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style_cadastro.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>CLONE Cadastre-se . Instagram</title>
</head>

<body>

    <main>
        <div class="right">
            <div class="panel login">
                <img id="logo" src="img/Logo instagram preto.png" alt="Instagram logo">
                <p>Cadastre-se para ver fotos e vídeos dos seus amigos.</p>
                <a href="#" class="login-facebook">Entrar com o Facebook</a>
                <div class="divider">
                    <div class="line"></div>
                    <p>OU</p>
                    <div class="line"></div>
                </div>
                <form action="cadastro.php" method="POST">
                    <input class="input-box" type="text" name="email" placeholder="Número do celular ou email" required>
                    <input class="input-box" type="text" name="name" placeholder="Nome completo" required>
                    <input class="input-box" type="text" name="username" placeholder="Nome de usuário" required>
                    <input class="input-box" type="password" name="password" placeholder="Senha" required>
                    <input class="button" type="submit" name="submit" value="Entrar">
                </form>

                <p class="subtexto">As pessoas que usam nosso serviço podem ter enviado suas informações de contato para o Instagram. <a href="#">Saiba mais</a></p>
                <p class="subtexto">Ao se cadastrar, você concorda com nossos <a href="#">Termos</a>, <a href="#">Política de Privacidade</a> e <a href="#">Política de Cookies</a>.</p>
            </div>

            <div class="panel singup">
                <p>tem uma conta? <a href="index.php">Conecte-se</a></p>
            </div>

            <div class="apps">
                <p>Obtenha o aplicativo.</p>
                <div class="app-stores">
                    <a class="apps" href="#"><img src="img/Google Play.png" alt="Baixe pela Google Play"></a>
                    <a class="apps" href="#"><img src="img/Microsoft Store.png" alt="Baixe pela Microsoft Store"></a>
                </div>
            </div>

        </div>
        </section>
    </main>

    <footer class="footer">
        <ul>
            <li><a href="">Meta</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Carreiras</a></li>
            <li><a href="">Ajuda</a></li>
            <li><a href="">API</a></li>
            <li><a href="">Privacidade</a></li>
            <li><a href="">Termos</a></li>
            <li><a href="">Principais contas</a></li>
            <li><a href="">Localizações</a></li>
            <li><a href="">Instagram Lite</a></li>
            <li><a href="">Carregamento de contatos e não usuários</a></li>
            <li><a href="">Meta Verified</a></li>
        </ul>
        <ul>
            <li>Portugês</li>
            <li>&copy; 2023 Instagram from Meta</li>
        </ul>
    </footer>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/4e6b50c3ce.js" crossorigin="anonymous"></script>
</body>

</html>