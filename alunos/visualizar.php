<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/menu.php";
$id = $_GET['id'];

$nome = "";
$sql = "select * from tb_alunos where id = $id";
$todos_os_alunos = mysqli_query($conexao, $sql);
while ($um_aluno = mysqli_fetch_assoc($todos_os_alunos)) :
    $nome = $um_aluno["nome"];
    $sobrenome = $um_aluno["sobrenome"];
endwhile;
?>

<h1>Ficha do Estudante</h1>

Nome: <?php echo $nome . " ". $sobrenome; ?><br>
Sobrenome: <br>
Data de nascimento: <br>
E-mail: <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";

?>