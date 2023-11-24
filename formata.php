<?php
// Obtenha a data e hora atual
$now = new DateTime();

// Defina o intervalo desejado (5 minutos)
$interval = new DateInterval('PT5M'); // PT5M representa um intervalo de 5 minutos

// Arredonda a data e hora para o próximo múltiplo de 5 minutos
$now->add($interval);

// Formate a data e hora conforme necessário
$formattedDateTime = $now->format('Y-m-d H:i:s');

// Exiba a data e hora formatada
echo "Data e hora arredondadas para o próximo múltiplo de 5 minutos: $formattedDateTime";
?>