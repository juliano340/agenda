<?php 

$tipo_conexao = $_SERVER['HTTP_HOST'];
echo $tipo_conexao;

if($tipo_conexao === 'juliano340.com') {

   echo 'HOST';


} else {


    echo 'local';
}



?>