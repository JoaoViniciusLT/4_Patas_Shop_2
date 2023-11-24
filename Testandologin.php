<?php
  // print_r($_REQUEST);
  session_start();
  require_once("config.php");
  $conexao = novaConexao();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Acessa        
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r('Email: '.$email);
        print_r('<br>');
        print_r('Senha: '.$senha);*/

        $sql= "SELECT * FROM usuarios WHERE emailUsuarios = '$email' and senhaUsuarios = '$senha'";


        $result = $conexao->query($sql);

        $user_data = mysqli_fetch_assoc($result);
        $id = $user_data['idUsuarios'];
        $nome = $user_data['nomeUsuarios'];
        $_SESSION['nome'] = $nome;
        $_SESSION['id'] = $id;
        print_r($_SESSION);
       // echo "$id";
        
        /* print_r("<br>");
        print_r($sql);
        print_r("<br>");
        print_r($result);*/

        if(mysqli_num_rows($result)<1){
            unset ($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
          else {
           print_r($result);
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: telainicial.php');
        }
    }
   
    else
    {
        //Não Acessa
        header('Location: login.php');
    }
?>