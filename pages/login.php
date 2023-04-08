<?php
if (isset($_POST['submit'])) {
    include_once('../config/config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(email,senha)
    VALUES('$email','$senha')");

    header('Location: sistema.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <title>Login | 🏗️</title>
</head>

<body>
    <header>
        <div class="center">
            <a class="login" href="../pages/inicial.php">Página Inicial</a>
            <a class="login" href="../pages/sistema.php">Sistema</a>
            <a class="login" href="../pages/login.php">Login</a>
            <a class="login" href="../pages/cadastre-se.php">Cadastre-se</a>
            <a class="login" href="sair.php">Encerrar Seção</a>
        </div>
    </header>

    <main>
        <!-- loading -->
        <div id="preloader">
            <div>
                <p class="par">Carregando...</p>
            </div>
        </div>
        <!-- loading -->
        <form action="testLogin.php" method="post">
            <div class="usuario">

                <h1>Login</h1>

                <input id="email" name="email" class="dados" type="text" placeholder="E-mail" required>
                <br><br>

                <input id="senha" name="senha" class="dados" type="password" placeholder="Senha" required>
                <br><br>

                <input id="submit" name="submit" type="submit" value="CADASTRAR" class="botao">

            </div>
        </form>
    </main>

    <footer>
        <div class="rodape">
            <a class="texto2" target="_blank" href="https://github.com/brunodev252/">Desenvolvido por &copy; Bruno
                Ferreira</a>
        </div>
    </footer>
</body>

<!-- script loading -->
<script src="../javascript/preloader.js"></script>
<!-- script loading -->

</html>