<?php
session_start();
require_once("config.php");
$conexao = novaConexao();
    /*
    print_r('Nome: '.$_POST['nome']);
    print_r('<br>');
    print_r('Email: '.$_POST['email']);
    print_r('<br>');
    print_r('Telefone: '.$_POST['telefone']);
    print_r('<br>');
    print_r('Sexo: '.$_POST['genero']);
    print_r('<br>');
    print_r('Data de Nascimento: '.$_POST['anonasc']);
    print_r('<br>');
    print_r('Cidade: '.$_POST['cidade']);
    print_r('<br>');
    print_r('Estado: '.$_POST['estado']);
    print_r('<br>');
    print_r('Endereço: '.$_POST['endereco']);
  
  */
  if(!empty($_GET['id'])){
    include_once("config.php");
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE idUsuarios=$id";

    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0){
      while($user_data = mysqli_fetch_assoc($result)){
        $id = $user_data['idUsuarios'];
        $nome = $user_data['nomeUsuarios'];
        $email = $user_data['emailUsuarios'];
        $senha = $user_data['senhaUsuarios'];
        $telefone = $user_data['telefoneUsuarios'];
        $sexo = $user_data['sexoUsuarios'];
        $data_nasc = $user_data['data_nasc'];
        $cidade = $user_data['cidadeUsuarios'];
        $estado = $user_data['estadoUsuarios'];
        $endereco = $user_data['enderecoUsuarios'];
      }
    }else{
      header("Location: sistema.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="editar.css" />

    <title>Editar Dados | 4 Patas shop</title>
  
</head>
<body>
    <div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
              <legend><b>Editando Registros</b></legend>
              <br><br>
              <div class="inputBox">
                <label for="nome" class="labelInput">Nome Completo</label>
                <input type="text" name = "nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
              </div>
              <br>
              <div class="inputBox">
              <label for="email" class="labelInput">Email</label>
                <input type="text" name = "email" id="email" class="inputUser" value="<?php echo $email?>" required>
                
              </div>
              <br>
              <div class="inputBox">
              <label for="senha" class="labelInput">Senha</label>
                <input type="text" name = "senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                
              </div>
              <br>
              <div class="inputBox">
                <label for="telefone" class="labelInput">Telefone</label>
                <input type="tel" name = "telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                
              </div>
              
              <p>Sexo: </p>
              <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> required>
              <label for="feminino">Feminino</label>
              <br>
              <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ?> required>
              <label for="feminino">Masculino</label>
              <br>
              <input type="radio" id="outro" name="genero" value="outro" <?php echo $sexo == 'outro' ? 'checked' : '' ?> required>
              <label for="outro">Outro</label>
              <br><br>
                <label for="data_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" name = "data_nasc" id="data_nasc" value="<?php echo $data_nasc?>" required>
                <br><br>
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <input type="text" name = "cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" required>
                  </div>
                  <br>
                  <div class="inputBox">
                    <label for="estado" class="labelInput">Estado</label>
                    <input type="text" name = "estado" id="estado" class="inputUser" value="<?php echo $estado?>" required>
                  </div>
                  <br>
                  <div class="inputBox"> 
                    <label for="endereco" class="labelInput">Endereço</label>
                    <input type="text" name = "endereco" id="endereco" class="inputUser" value="<?php echo $endereco?>" required>
                  </div>
               
                  <input type="hidden" name="id" value ="<?php echo $id?>">
                  <br>
                  <div class="voltar">
                  <a href="sistema.php">Voltar</a>
                  <br>
                  <br>
                  <input type="submit" name="update" id="update">
                  </div>
                </div>
                <main></main>
            </fieldset>
        </form>
    </div>
</body>
</html>