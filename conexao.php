<?php
//configura��es em constantes
define('BD_USER', 'root');

//configura��es em vari�veis
$bd_user = "root"; //usu�rio que ir� acessar o banco de dados, por padr�o o root � criado
$bd_pass = "";      //senha do usu�rio, o xampp cria o usu�rio root sem senha
$bd_name = "db_sistur"; //o nome da base de dados
$bd_host = "localhost"; //e o ip/host do SGBD
//configura��es em arrays
$_config["BD_USER"] = "";

$connBD = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name);

mysqli_set_charset($connBD, "utf8");
?>