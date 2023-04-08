<?php
if (isset($_POST['submit'])) {
    include_once('../config/config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha)
    VALUES('$nome','$email','$senha')");

    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cadastre-se.css">
    <title>Cadastre-se | 🏗️</title>
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
        <div class="box">
            <form action="cadastre-se.php" method="post">
                <fieldset>

                    <legend>Cadastro de Usuários</legend>

                    <div class="inputBox">
                        <input id="nome" maxlength="60" type="text" name="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo
                        </label>
                    </div><br><br>

                    <div class="inputBox">
                        <input id="email" type="text" name="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div><br><br>

                    <div class="inputBox">
                        <input id="senha" type="password" name="senha" class="inputUser" required>
                        <label for="password" class="labelInput">Senha</label>
                    </div><br><br>

                    <input id="submit" type="submit" name="submit" class="submit" value="CADASTRAR">

                </fieldset>
            </form>
        </div>
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