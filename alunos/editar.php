<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
include "../includes/menu.php";

$id = $_GET["id"];
?>

<h1>Editar aluno <?php echo $id; ?></h1>

<form method="post" action="atualizar.php">
    <!-- mostrar no input a variavel -->
    Nome: <input name="nome" value="<?php echo $nome;?>"> <br>

    <button type="submit">atualizar</button>
</form>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>