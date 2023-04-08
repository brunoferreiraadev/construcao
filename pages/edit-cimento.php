<?php
include_once('../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cimento WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $quantidade = $user_data['quantidade'];
            $valor = $user_data['valor'];
        }

    } else {
        header('Location: cimento.php');
    }

} else {
    header('Location: cimento.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cad-cimento.css">
    <title>Eidtar Cimento | 🏗️</title>
</head>

<body>

    <header>
        <div class="center">
            <a class="login" href="../pages/login.php">Login</a>
            <a class="login" href="../pages/cadastre-se.php">Cadastre-se</a>
            <a class="login" href="../pages/sistema.php">Cadastrar Produtos</a>
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
            <form action="saveEditCimento.php" method="post">

                <h2>Cadastrar Telhas</h2><br><br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome do produto
                    </label>
                    <input value="<?php echo $nome ?>" type="text" name="nome" class="inputUser" required>
                </div><br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Quantidade
                    </label>
                    <input value="<?php echo $quantidade ?>" type="text" name="quantidade" class="inputUser" required>
                </div><br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Valor
                    </label>
                    <input value="<?php echo $valor ?>" type="text" name="valor" class="inputUser" required><br><br>
                </div><br>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="submit" class="submit" value="CADASTRAR">

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