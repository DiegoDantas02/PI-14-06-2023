<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
include "../includes/menu.php";

$id = $_GET["id"];

$nome = "";
$sql = "select * from tb_alunos where id = $id";
$todos_os_alunos = mysqli_query($conexao, $sql);
while($um_aluno = mysqli_fetch_assoc($todos_os_alunos)):
$nome = $um_aluno["nome"];
endwhile;
?>
<h1>Editar aluno <?php echo $id; ?></h1>

<form method="post" action="atualizar.php">
    <!-- mostrar no input a variavel -->
    Nome: <input name="nome" value="<?php echo $nome;?>"> <br>
<br>
    <button type="submit">atualizar</button>
</form>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>