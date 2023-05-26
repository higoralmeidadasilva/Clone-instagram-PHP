<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>CLONE Instagram</title>
</head>

<body>
    <main>
        <section class="container">
            <div class="left">
                <img src="img/home-phones.png" alt="phone">
                <img class="screen" src="img/Slides (1).png" alt="photo">
            </div>

            <div class="right">
                <div class="panel login">
                    <img id="logo" src="img/Logo instagram preto.png" alt="Instagram logo">
                    <form action="testelogin.php" method="POST">

                        <input class="input-box" type="text" name="username" placeholder="Telefone, nome de usuário ou email" required>
                        <input class="input-box" type="password" name="password" placeholder="Senha" required>
                        <input class="button" type="submit" name="submit" value="Entrar">

                        <div class="divider">
                            <div class="line"></div>
                            <p>OU</p>
                            <div class="line"></div>
                        </div>

                        <a href="#" class="login-facebook">Entrar com o Facebook</a>
                        <a href="#" class="forgot-password">Esqueceu a senha?</a>
                    </form>
                </div>

                <div class="panel singup">
                    <p>Não tem uma conta? <a href="./cadastro.php">Cadastre-se</a></p>
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