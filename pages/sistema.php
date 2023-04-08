<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');

}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sistema.css">
    <title>Bem vindo ao Sistema | 🏗️</title>
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
        <h1>Cadastro dos produtos por seção</h1>
        <hr size="1" width="100%" color="black">

        <!-- bloco linha 1 -->
        <div class="box">
            <div class="bloco">
                <a href="../pages/cad-telhas.php">

                    <div class="link">
                        <h3>TELHAS</h3>
                    </div>
                </a>
            </div>

            <div class="bloco">
                <a href="../pages/cad-cimento.php">

                    <div class="link">
                        <h3>CIMENTO</h3>
                    </div>
                </a>
            </div>

            <div class="bloco">
                <a href="../pages/cad-tintas.php">

                    <div class="link">
                        <h3>TINTAS</h3>
                    </div>
                </a>
            </div>

            <!-- bloco linha 2 -->
            <div class="bloco">
                <a href="../pages/cad-pisos.php">

                    <div class="link">
                        <h3>PISOS E REVESTIMENTOS</h3>
                    </div>
                </a>
            </div>

            <div class="bloco">
                <a href="../pages/cad-madeiras.php">

                    <div class="link">
                        <h3>MADEIRAS</h3>
                    </div>
                </a>
            </div>

            <div class="bloco">
                <a href="../pages/cad-materiais.php">

                    <div class="link">
                        <h3>MATERIAS ELÉTRICOS</h3>
                    </div>
                </a>
            </div>
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