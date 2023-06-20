<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo Aluno</h1>
<p>Vamos cadastrar um aluno novo no sistema.</p>
<form action="inserir.php" method="post">
    Nome: <input name="nome" required maxlegth="50">
    <br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>