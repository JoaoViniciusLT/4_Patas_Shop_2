<?php
        session_start();
        require_once('config.php');
        $conexao = novaConexao();        
        $id = $_SESSION['id'];
        $nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="telainicial.css">
    <link rel="stylesheet" href="navbar-home.css">
    <title>Pagina Inicial | 4 Patas shop</title>
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
           <div class="login-button">
                <a href="logout.php" class= "btn btn-danger">Sair</a>
               </div>
           </div>
           
        </nav>
    </header>
    <h1 class="ola"><?php echo "Seja bem vindo(a) $nome"?></h1>
    <div class="container">
        <h1 class="titulo">Home</h1>

        <div class="row">
            <div class="col-lg-4">
                <h3>Coluna 1</h3>
                <P>“Os homens são movidos e perturbados não pelas coisas, mas pelos julgamentos e opiniões que eles têm delas”
                “Os homens são movidos e perturbados não pelas coisas, mas pelos julgamentos e opiniões que eles têm delas”. – Epicteto.

                “Se você está angustiado por causa de eventos externos, a sua dor não se deve à coisa em si, mas à sua estimativa dela; e isso você tem o poder de revogar a qualquer momento.” – Marco Aurélio.

                “Estamos mais freqüentemente assustados do que feridos; e sofremos mais na imaginação do que na realidade. ” – Sêneca.

                “Você pode amarrar minha perna, mas nem Zeus tem o poder de quebrar minha liberdade de escolha.” – Epiceto.

                “Pense na beleza da vida. Observe as estrelas e veja-se correndo com elas.” – Marco Aurélio.

                “Nenhuma pessoa tem o poder de ter tudo o que deseja, mas está em seu poder não querer o que não tem e fazer bom uso do que tem de bom grado.” – Sêneca.

                “Se alguém lhe disser que certa pessoa fala mal de você, não dê desculpas sobre o que é dito de você, mas responda: ‘Ele não sabia sobre meus outros defeitos, caso contrário, não teria mencionado apenas esses.‘” – Epicteto.
                </P>
            </div>

            <div class="col-lg-4">
                <h3>Coluna 2</h3>
                <P>“Os homens são movidos e perturbados não pelas coisas, mas pelos julgamentos e opiniões que eles têm delas”
                “Os homens são movidos e perturbados não pelas coisas, mas pelos julgamentos e opiniões que eles têm delas”. – Epicteto.

                “Se você está angustiado por causa de eventos externos, a sua dor não se deve à coisa em si, mas à sua estimativa dela; e isso você tem o poder de revogar a qualquer momento.” – Marco Aurélio.

                “Estamos mais freqüentemente assustados do que feridos; e sofremos mais na imaginação do que na realidade. ” – Sêneca.

                “Você pode amarrar minha perna, mas nem Zeus tem o poder de quebrar minha liberdade de escolha.” – Epiceto.

                “Pense na beleza da vida. Observe as estrelas e veja-se correndo com elas.” – Marco Aurélio.

                “Nenhuma pessoa tem o poder de ter tudo o que deseja, mas está em seu poder não querer o que não tem e fazer bom uso do que tem de bom grado.” – Sêneca.

                “Se alguém lhe disser que certa pessoa fala mal de você, não dê desculpas sobre o que é dito de você, mas responda: ‘Ele não sabia sobre meus outros defeitos, caso contrário, não teria mencionado apenas esses.‘” – Epicteto.</P>
            </div>

            <div class="col-lg-4">
                <h3>Coluna 3</h3>
                <P>“Os homens são movidos e perturbados não pelas coisas, mas pelos julgamentos e opiniões que eles têm delas”
                “Os homens são movidos e perturbados não pelas coisas, mas pelos julgamentos e opiniões que eles têm delas”. – Epicteto.

                “Se você está angustiado por causa de eventos externos, a sua dor não se deve à coisa em si, mas à sua estimativa dela; e isso você tem o poder de revogar a qualquer momento.” – Marco Aurélio.

                “Estamos mais freqüentemente assustados do que feridos; e sofremos mais na imaginação do que na realidade. ” – Sêneca.

                “Você pode amarrar minha perna, mas nem Zeus tem o poder de quebrar minha liberdade de escolha.” – Epiceto.

                “Pense na beleza da vida. Observe as estrelas e veja-se correndo com elas.” – Marco Aurélio.

                “Nenhuma pessoa tem o poder de ter tudo o que deseja, mas está em seu poder não querer o que não tem e fazer bom uso do que tem de bom grado.” – Sêneca.

                “Se alguém lhe disser que certa pessoa fala mal de você, não dê desculpas sobre o que é dito de você, mas responda: ‘Ele não sabia sobre meus outros defeitos, caso contrário, não teria mencionado apenas esses.‘” – Epicteto.</P>
            </div>
        </div>
    </div>
    <div class="agende">
    <h3>Quer um novo tratamento do seu Pet?</h3>
    <a href="agenda.php" class= "btn btn-primary">Agende Agora</a>
    <br><br>
    <h3>Já tem um Serivço Agendado? Confira</h3>
    <a class="btn btn-success btn_carrega_conteudo" href='verAgenda.php' id="pagina">Ver agendamentos</a><br><br>
    </div>
   
    
</html>