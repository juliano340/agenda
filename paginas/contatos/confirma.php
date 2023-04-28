<?php 

$id = $_GET["id"];

echo '<h4>Confirma a exclusão? User id = ' . $id . '</h4>';
$str = "'index.php?menuop=excluir-contato&id=$id'";

echo "<a class='btn btn-danger' href=" . $str . ">Excluir!</a>   ";
echo "<a class='btn btn-warning' href='index.php?menuop=contatos'>Cancelar</a>";



?>





