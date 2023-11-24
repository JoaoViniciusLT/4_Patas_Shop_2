<?php
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
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Cadastro de Clientes | 4 Patas shop</title>
  
</head>
<body>
    <div class="box">
        <form action="inserirdados.php" method="post">
            <fieldset>
              <legend><b>Cadastro Clientes</b></legend>
              <br><br>
              <div class="inputBox">
                <label for="nome" class="labelInput">Nome Completo</label>
                <input type="text" name = "nome" autocomplete="off" id="nome" class="inputUser" required>
              </div>
              <br>
              <div class="inputBox">
              <label for="email" class="labelInput">Email</label>
                <input type="text" name = "email" id="email" class="inputUser" required>
                
              </div>
              <br>
              <div class="inputBox">
              <label for="senha" class="labelInput">Senha</label>
                <input type="password" name = "senha" id="senha" class="inputUser" required>
                
              </div>
              <br>
              <div class="inputBox">
                <label for="telefone" class="labelInput">Telefone</label>
                <input type="tel" name = "telefone" id="telefone" class="inputUser" required>
                
              </div>
              
              <p>Sexo: </p>
              <input type="radio" id="feminino" name="genero" value="feminino" required>
              <label for="feminino">Feminino</label>
              <br>
              <input type="radio" id="masculino" name="genero" value="masculino" required>
              <label for="feminino">Masculino</label>
              <br>
              <input type="radio" id="outro" name="genero" value="outro" required>
              <label for="outro">Outro</label>
              <br><br>
                <label for="data_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" name = "data_nasc" id="data_nasc" required>
                <br><br>
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <input type="text" name = "cidade" id="cidade" class="inputUser" required>
                  </div>
                  <br>
                  <div class="inputBox">
                    <label for="estado" class="labelInput">Estado</label>
                    <input type="text" name = "estado" id="estado" class="inputUser" required>
                  </div>
                  <br>
                  <div class="inputBox"> 
                    <label for="endereco" class="labelInput">Endereço</label>
                    <input type="text" name = "endereco" id="endereco" class="inputUser" required>
                  </div>
                  <br>
                  <div class="voltar">
                  <a href="entrar.php">Voltar</a>
                  </div>
                  <input type="submit" name="submit" id="submit">
                  
                </div>
                <main></main>
            </fieldset>
        </form>
    </div>
</body>
</html>