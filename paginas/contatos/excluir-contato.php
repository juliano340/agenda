<header>
    <h3>Excluir contato</h3>
</header>

<?php

$idContato = mysqli_real_escape_string($conexao, $_GET["id"]);
$sql = "DELETE FROM contatos WHERE id_contato = {$idContato}";
mysqli_query($conexao, $sql);


echo 'Registro excluído com sucesso!';
echo '<br><br><a href="index.php?menuop=contatos">Voltar</a>';


?>