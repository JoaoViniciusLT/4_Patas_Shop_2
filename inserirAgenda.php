<?php
            session_start();
           include_once('config.php');
           $nome = $_POST['nome'];
           $porte = $_POST['porte'];
           $temperamento = $_POST['temperamento']; 
           $sexo = $_POST['sexo'];
           $servicos = $_POST['servicos'];
           $data_agenda = $_POST['data'];
           $horario = $_POST['horario'];
           $id = $_SESSION['id'];
        //echo "$nome, $porte, $temperamento, $sexo, $servicos, $data_agenda, $id";
           $conexao = novaConexao();
           $sqlAgenda="INSERT INTO agendamentos(nomeCachorro, tamanho, comportamento, sexoCachorro, servicos, data_agenda, horario, idUsuarios)
            values (?, ?, ?, ?, ?, ?, ?, ?)";
            $conexao = novaConexao();
           $insert = $conexao->prepare($sqlAgenda);
            $dados = $_POST;
            $dados ['id'] = $_SESSION['id'];
           /* if (isset($dados['data_nasc'])) {
                $datanasc = DateTime::createFromFormat('d/m/Y', $dados['data_nasc']);
                echo "datanasc: $datanasc";
                if (!$datanasc) {
                    $erros['data_nasc'] = "A data de nascimento deverá estar no formato dd/mm/aaaa";
                }
            }
            */
           $params = [
               $dados['nome'],   
               $dados['porte'],    
               $dados['temperamento'],
               $dados['sexo'],
               $dados['servicos'],
             // $datanasc ? $datanasc->format('Y-m-d'):null,
              $dados ['data'],
              $dados ['horario'],
              $dados ['id']
            ];
         //       echo "<br>dataformatada: $datanasc";
         header("Location: telainicial.php");
        
        $insert->bind_param("sssssssi", ...$params);         
           if ($insert->execute()){
               unset($dados); 
            }
            
?>