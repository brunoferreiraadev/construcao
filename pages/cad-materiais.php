<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

if (isset($_POST['submit'])) {
    include_once('../config/config.php');

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $result = mysqli_query($conexao, "INSERT INTO materiais(nome,quantidade,valor)
    VALUES('$nome','$quantidade','$valor')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cad-materiais.css">
    <title>Cadastro - Materiais Elétricos | 🏗️</title>
</head>

<body>
    <header>
        <div class="center">
            <a class="login" href="../pages/login.php">Login</a>
            <a class="login" href="../pages/cadastre-se.php">Cadastre-se</a>
            <a class="login" href="sair.php">Encerrar Seção</a>
        </div>
    </header>

    <nav>
        <a href="../pages/inicial.php">Página Inicial</a>
        <a href="../pages/sistema.php">Cadastrar Produtos</a>
        <a href="../pages/telhas.php">Telhas</a>
        <a href="../pages/cimento.php">Cimento</a>
        <a href="../pages/tintas.php">Tintas</a>
        <a href="../pages/pisos.php">Pisos e Revestimentos</a>
        <a href="../pages/madeiras.php">Madeiras</a>
        <a href="../pages/materiais.php">Materiais Elétricos</a>
    </nav>

    <main>
        <!-- loading -->
        <div id="preloader">
            <div>
                <p class="par">Carregando...</p>
            </div>
        </div>
        <!-- loading -->
        <div class="box">
            <form action="cad-materiais.php" method="post">

                <h2>Materiais Elétricos</h2><br><br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome do produto
                    </label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div><br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Quantidade
                    </label>
                    <input type="text" name="quantidade" id="nome" class="inputUser" required>
                </div><br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Valor
                    </label>
                    <input type="text" name="valor" id="nome" class="inputUser" required><br><br>
                </div><br>

                <input type="submit" name="submit" id="submit" class="submit" value="CADASTRAR">

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