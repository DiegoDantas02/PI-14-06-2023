<?php
include "../includes/conexao.php";

$foto = $_POST["foto"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nascimento = $_POST["data_nascimento"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$sql = "insert into tb_alunos(foto, nome, sobrenome, data_nascimento, telefone, email) values('$foto','$nome', '$sobrenome', '$data_nascimento', '$telefone', '$email')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>