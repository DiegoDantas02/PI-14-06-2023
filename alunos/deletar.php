<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$sql = "delete from tb_alunos where id =  $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("Location: selecionar.php");
?>