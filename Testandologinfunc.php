<?php
  // print_r($_REQUEST);
  session_start();
  require_once("config.php");
  $conexao = novaConexao();
    if(isset($_POST['submit_func']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Acessa        
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r('Email: '.$email);
        print_r('<br>');
        print_r('Senha: '.$senha);*/

        $sql= "SELECT * FROM funcionarios WHERE emailFuncionarios = '$email' and senhaFuncionarios = '$senha'";

        $result = $conexao->query($sql);
        $user_data = mysqli_fetch_assoc($result);
        $nomeF = $user_data['nomeFuncionarios'];
        $_SESSION['nome'] = $nomeF;
        print_r($_SESSION);
       /* print_r("<br>");
        print_r($sql);
        print_r("<br>");
        print_r($result);*/

        if(mysqli_num_rows($result)<1){
            unset ($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: loginFun.php');
        }
        else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        //Não Acessa
        header('Location: login.php');
    }
?>