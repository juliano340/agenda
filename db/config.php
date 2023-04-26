<?php

$tipo_conexao = $_SERVER['HTTP_HOST'];

if($tipo_conexao = 'juliano340.com') {

    define("SERVIDOR", "sql569.main-hosting.eu");
    define("USUARIO", "u550388678_root");
    define("SENHA", "!B1eoOU8n");
    define("BANCO", "u550388678_dbagenda");


} else {


    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", "");
    define("BANCO", "dbsisagendador");
}

?>

