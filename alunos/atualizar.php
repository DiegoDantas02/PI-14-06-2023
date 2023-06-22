<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = $_POST["nome"];
$sql = "update tb_alunos set nome = '$nome' where id =$id";


mysqli_close($conexao);

include "../includes/rodape.php";
?>
