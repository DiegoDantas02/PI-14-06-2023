<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$sql = "insert into tb_alunos(nome) values('$nome)";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>