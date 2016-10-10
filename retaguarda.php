<?php
    require("_includes/dao/UsuarioDAO.php");
    require("_includes/config.php");
    
    $repositorio = new UsuarioDAO($connBD);
    
    echo $repositorio->todos();
    
?>
