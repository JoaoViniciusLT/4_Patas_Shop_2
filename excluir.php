<?php
session_start();
require_once("config.php");
$conexao = novaConexao();
  if(!empty($_GET['id'])){
    include_once("config.php");
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE idUsuarios=$id";

    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM usuarios WHERE idUsuarios=$id";
        $resultDelete = $conexao->query($sqlDelete);
      }
    }
    header("Location: sistema.php");
?>