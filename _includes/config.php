<?php

define('BD_USER', 'root');

$bd_user = "root";
$bd_pass = "olliver89632";
$bd_name = "db_sistur";
$bd_host = "localhost";

//$_config["BD_USER"] = "";

$connBD = mysql_connect($bd_host, 
        $bd_user, 
        $bd_pass, 
        $bd_name);

mysqli_set_charset($connBD,"utf8");


?>