<?php

           include_once('config.php');
           $nome = $_POST['nome'];
           $senha = $_POST['senha'];
           $email = $_POST['email']; 
           $telefone = $_POST['telefone'];
           $sexo = $_POST['genero'];
           $datanasc = $_POST['data_nasc'];
           $cidade = $_POST['cidade'];
           $estado = $_POST['estado'];
           $endereco = $_POST['endereco'];
         // echo "$nome, $senha, $email, $telefone, $sexo, $datanasc, $cidade, $estado, $endereco";
           $conexao = novaConexao();
           $sql="INSERT INTO usuarios (nomeUsuarios, senhaUsuarios, emailUsuarios, telefoneUsuarios, sexoUsuarios, data_nasc, cidadeUsuarios, estadoUsuarios, enderecoUsuarios) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
           $conexao = novaConexao();
           $insert = $conexao->prepare($sql);
            $dados = $_POST;
            
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
               $dados['senha'],    
               $dados['email'],
               $dados['telefone'],
               $dados['genero'],
             // $datanasc ? $datanasc->format('Y-m-d'):null,
              $dados ['data_nasc'],
               $dados['cidade'],
               $dados['estado'],
               $dados['endereco']
            ];
         //       echo "<br>dataformatada: $datanasc";

         header("Location: login.php");
          $insert->bind_param("sssssssss", ...$params);     
           if ($insert->execute()){
               unset($dados); 
            }
?>