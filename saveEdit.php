<?php
    require_once("config.php");
    $conexao = novaConexao();
    include_once("config.php");

   /* $id = $_POST['id'];
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        /*echo $id;
        echo $nome;
        echo $email;
        echo $senha;
        echo $telefone;
        echo $sexo;
        echo $data_nasc;
        echo $cidade;
        echo $estado;
        echo $endereco;*/

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        echo $id;
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco']; 

        $sqlUpdate = "UPDATE usuarios SET nomeUsuarios='$nome',emailUsuarios='$email',senhaUsuarios='$senha', telefoneUsuarios='$telefone',sexoUsuarios='$sexo',
        data_nasc='$data_nasc',cidadeUsuarios='$cidade',estadoUsuarios='$estado', enderecoUsuarios='$endereco' WHERE idUsuarios = '$id'";

    }

        $result = $conexao->query($sqlUpdate); 
    
  header("Location: sistema.php");
?>