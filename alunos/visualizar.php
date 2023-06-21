<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET['id'];

$nome = "";
$sobrenome = "";
$data_nascimento = "";
$email = "";
$telefone = "";
$foto = "";

$sql = "select * from tb_alunos where id = $id";
$todos_os_alunos = mysqli_query($conexao, $sql);
while ($um_aluno = mysqli_fetch_assoc($todos_os_alunos)) :

    $nome = $um_aluno["nome"];
    $sobrenome = $um_aluno["sobrenome"];
    $data_nascimento = $um_aluno["data_nascimento"];
    $email = $um_aluno["email"];
    $telefone = $um_aluno["telefone"];
    $foto = $um_aluno["foto"];

endwhile;
?>

<h1>Ficha do Estudante</h1>

Nome: <?php echo $nome ."". $sobrenome ; ?><br>

Data de nascimento: <?php echo $data_nascimento ; ?><br>
E-mail: <?php echo $email ; ?><br>
Telefone: <?php echo $telefone ; ?><br>


<br>
<br>
<br>
<br>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>