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
    <th scope="col">Serviço</th>
    <th scope="col">Dia Marcado</th>
    <th scope="col">Horário</th>
  </tr>
</thead>
<tbody>
          <?php
              while($user_data = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<td>".$user_data['idAgenda']."</td>";
                  echo "<td>".$user_data['servicos']."</td>";

                  echo "<td>".$user_data['emailUsuarios']."</td>";
              }

              ?>

</body>
</html>