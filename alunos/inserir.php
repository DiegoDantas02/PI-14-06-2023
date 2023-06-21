<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nascimento = $_POST["date"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$sql = "insert into tb_alunos(nome, sobrenome, data_nascimento, telefone, email) values('$nome', '$sobrenome', '$data_nascimento', '$telefone', '$email')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>