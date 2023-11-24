<?php
   session_start();
   include_once('config.php');
    $conexao = novaConexao();
    $resultado = $conexao->query($sql);
?>