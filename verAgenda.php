<?php
              session_start();
              require_once('config.php');
              $conexao = novaConexao();        
              $id = $_SESSION['id'];
              $nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Ver Agendamentos | 4 Patas Shop</title>
</head>
<body>

<header>
        <nav>
            <a class="logo" href="/">4 Patas</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                
           </ul>                                  
                <a href="logout.php" class= "btn btn-danger">Sair</a>
               </div>
           </div>
        </nav>
    </header>

<h1 class="ola"><?php echo "Seja bem vindo(a) $nome"?></h1>

<div class="">
      <table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Nome</th>
    <th scope="col">Email</th>
    <th scope="col">Senha</th>
    <th scope="col">Telefone</th>
    <th scope="col">Sexo</th>
    <th scope="col">Data de Nascimento</th>
    <th scope="col">Cidade</th>
    <th scope="col">Estado</th>
    <th scope="col">Endereço</th>
    <th scope="col">Ações</th>
  </tr>
</thead>
<tbody>
          <?php
              while($user_data = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<td>".$user_data['idUsuarios']."</td>";
                  echo "<td>".$user_data['nomeUsuarios']."</td>";
                  echo "<td>".$user_data['emailUsuarios']."</td>";
              }

              ?>

</body>
</html>