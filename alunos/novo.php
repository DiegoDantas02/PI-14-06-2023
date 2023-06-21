<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo Aluno</h1>
<p>Vamos cadastrar um aluno novo no sistema.</p>

<form action="inserir.php" method="post">
    Nome: <input name="nome" required maxlegth="50">
    <br> 
    Sobrenome: <input name="sobrenome" required maxlegth="50">
    <br> 
    Data de nascimento: <input type="date" name="data_nascimento" required maxlegth="50">
    <br> 
    E-mail: <input name="email" required maxlegth="50">
    <br> 
    Foto: <input name="telefone" required maxlegth="50">
    <br> 
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>