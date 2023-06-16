<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>
   <a href="../img/chapeuformatura.png"> Painel Selecionar </a>
</h1>

<p>
   <a href="novo.php"> Adicionar Aluno </a>
</p>
<h2>Listagem de alunos</h2>

<table border="1">
   <tr>
      <td>Código</td>
      <td>Foto</td>
      <td>Nome</td>
      <td>Telefone</td>
      <td>E-mail</td>
      <td>Data de nascimento</td>

   </tr>
   <?php
   $sql = "select * from tb_alunos";
   $todos_os_alunos = mysqli_query($conexao, $sql);
   while ($um_aluno = mysqli_fetch_assoc($todos_os_alunos)) :
   ?>
      <tr>
         <td><?php echo $um_aluno['id'] ?></td>
         <td>
         <a href="../img/chapeuformatura.png"></a>
         </td>

      <td>
            <?php echo $um_aluno['nome'] ?>
            ><?php echo $um_aluno['sobrenome'] ?>
         </td>

         <td><?php echo $um_aluno['telefone'] ?></td>
         <td><?php echo $um_aluno['email'] ?></td>

      </tr>
   <?php
   endwhile;
   ?>
</table>
<?php
include "../includes/rodape.php";
?>