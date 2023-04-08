<?php
include_once('../config/config.php');
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $sqlInsert = "UPDATE tintas SET nome='$nome',quantidade='$quantidade',valor='$valor' WHERE id=$id";

    $result = $conexao->query($sqlInsert);
}
header('Location: tintas.php');
?>