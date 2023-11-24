        <?php
            session_start();
            require_once("config.php");
            $conexao = novaConexao();
           
            //print_r($_SESSION);
            if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
            {
                unset ($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
            }
            $logado = $_SESSION['email'];
            if(!empty($_GET['search'])){
                $data = $_GET['search'];
                $sql = "SELECT * FROM usuarios WHERE idUsuarios LIKE '%$data%' OR nomeUsuarios LIKE '%$data%' OR emailUsuarios LIKE '%$data%' ORDER BY idUsuarios DESC";
            }
            else{
                $sql = "SELECT * FROM usuarios ORDER BY idUsuarios DESC";
                
            }
            include_once('config.php');
           

            $result = $conexao->query($sql);
           // print_r($result);'
        ?>

        <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

           <link rel="stylesheet" href="calendario.css">

            <link rel="stylesheet" href="sistema.css">

            <title>Sistema | 4 Patas shop</title>
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
        <br>
        <?php echo "<h1> Bem vindo(a) <u>$logado</u></h1>"?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
        </button>
    </div>
    <br>
    <br>
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
                  echo "<td>".$user_data['senhaUsuarios']."</td>";
                  echo "<td>".$user_data['telefoneUsuarios']."</td>";
                  echo "<td>".$user_data['sexoUsuarios']."</td>";
                  echo "<td>".$user_data['data_nasc']."</td>";
                  echo "<td>".$user_data['cidadeUsuarios']."</td>";
                  echo "<td>".$user_data['estadoUsuarios']."</td>";
                  echo "<td>".$user_data['enderecoUsuarios']."</td>";
                  echo "<td>
                   
                  <a class= 'btn btn-sm btn-primary' href='editar.php?id=$user_data[idUsuarios]'> 
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </a>
                  </svg>
                  <a  class= 'btn btn-sm btn-danger' href='excluir.php?id=$user_data[idUsuarios]'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                  <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                </svg>
                  </a>
                  </td>";
              }
          ?>
</tbody>
</table>
      </div>
      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Agenda de Serviços</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Fev</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Abr</td> 
				              <td class="month">Mai</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Ago</td> 
				              <td class="month">Set</td> 
				              <td class="month">Out</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dez</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Dom</td> 
				          <td class="day">Seg</td> 
				          <td class="day">Ter</td> 
				          <td class="day">Qua</td> 
				          <td class="day">Qui</td> 
				          <td class="day">Sex</td> 
				          <td class="day">Sáb</td>
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
				        <button class="button" id="add-button">Adicionar Evento</button>
				      </div>
				    </div>
				    <div class="events-container">
				    </div>
				    <div class="dialog" id="dialog">
				        <h2 class="dialog-header"> Adicionar Evento </h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
				            <label class="form-label" id="valueFromMyButton" for="name">Título de Evento</label>
				            <input class="input" type="text" id="name" maxlength="36">
				            <label class="form-label" id="valueFromMyButton" for="count">Descrição do evento</label>
				            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
				            <input type="button" value="Cancel" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>
        <script src="mobile-navbar.js"></script>
        <script>
            var search = document.getElementById('pesquisar');

            search.addEventListener("keydown", function(event) {
                if(event.key == "Enter")
                {
                    searchData();
                }
            });

            function searchData(){
                window.location = 'sistema.php?search='+search.value;
            }
        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
        </body>
        </html>