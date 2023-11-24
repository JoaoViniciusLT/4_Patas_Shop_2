<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
     crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="js/data.js">

    <title>Agendamento | 4 Patas Shop</title>
  <body>
  	<div class="container-fluid">
      <div class="jumbotron"> 
    	   <h1 class="text-center">Agendamento de Serviços</h1><br> 
    </div><br>
    	<form action="inserirAgenda.php" method="POST"> 
  			<div class="col-sm-6 col-sm-offset-3">         
            <label>Nome do Cachorro</label>
            <input class="form-control" type="text" autocomplete="off"  name="nome" placeholder="Digite o nome do Cachorro" required> 
        </div>
        <div class="col-sm-6 col-sm-offset-3">	
    			<label>Porte</label>
      			<select name="porte" class="form-control">
                <option value="" selected=>Selecione o Tamanho do Cachorro</option>
                <option>Pequeno</option>
                <option>Médio</option> 
                <option>Grande</option> 
            </select>  			
  			</div>

        <div class="col-sm-6 col-sm-offset-3">	
    			<label>Temperamento</label>
      			<select name="temperamento" class="form-control">
                <option value="" selected=>Selecione o Comportamento</option>
                <option>Dócil</option>
                <option>Agressivo(a)</option> 
                <option>Agitado(a)</option> 
            </select>  			
  			</div>
              <div class="col-sm-6 col-sm-offset-3">	
    			<label>Sexo</label>
      			<select name="sexo" class="form-control">
                <option value="" selected=>Selecione o sexo do Cachorro</option>
                <option>Macho</option>
                <option>Fêmea</option> 
            </select>  			
  			</div>
        
        <div class="col-sm-6 col-sm-offset-3">	
    			<label>Serviços</label>
      			<select name="servicos" class="form-control">
                <option value="" selected=>Selecione um serviço</option>
                <option>Tosa -- R$60,00</option>
                <option>Banho -- R$20,00</option>
                <option>Banho e Tosa -- R$110,00</option>   
                <option>Escovação -- R$25,00</option> 
            </select>  			
  			</div>
              <div class="col-sm-6 col-sm-offset-3">	
                <label> Escolha o Dia</label>
            <input id="data" name="data" class="form-control" type="date" min="" required></input>
            <input type="hidden" name="id">
              </div>

              <div class="col-sm-6 col-sm-offset-3">
              <label>Horário</label>
              <select name="horario" class="form-control">
              <option value="" selected=>Selecione o Horário</option>
              <option value="08:00">08:00</option>
              <option value="08:30">08:30</option>
              <option value="09:00">09:00</option>
              <option value="09:30">09:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              </select>
              </div>

          <!-- Input escondido para o Id Gravar no BD-->
          <input type="hidden" name="idUsuarios" >  
    			<div class="col-sm-offset-3 col-sm-6"><br>

      				<button type="submit" class="btn btn-success" id="submit_agenda" onclick="abrirAlerta()">Agendar</button>
    			</div>
  </body>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

          <!-- Scrpit para alert -->
        <script>
          function abrirAlerta(){
            alert("Agendamento realizado!!")
          }
        </script>

    <!-- Script para não marcar datas anteriores 

        <script>
          function pad(valor) {
    return valor.toString().padStart(2, '0');
}

    function formata(data) {
        return data.getFullYear() + '-' + pad(data.getMonth() + 1) + '-' + pad(data.getDate())
              + 'T' + pad(data.getHours()) + ':' + pad(data.getMinutes());
    }

    var hoje = formata(new Date());

    // DOMContentLoaded: assim que carregar a página
    document.addEventListener('DOMContentLoaded', function() {
        var campo = document.querySelector('#data');
        // seta a data mínima para o campo
        campo.min = hoje;

        // mostra mensagem de erro customizada (caso não queira a mensagem padrão do browser)
        campo.addEventListener('invalid', function(e) {
            e.target.setCustomValidity(`A data não pode ser anterior a ${hoje}`);
        });
        campo.addEventListener('input', function(e) {
            e.target.setCustomValidity('');
            e.target.checkValidity();
        });
    });
            </script>
            -->
            <script>
                var hoje = new Date().toISOString().split('T')[0];
                document.getElementById("data").setAttribute("min", hoje);
            </script>
</html>