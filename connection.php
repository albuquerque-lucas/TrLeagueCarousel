<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'trleague_carrossel';


$mysql = new mysqli($host, $user, $password, $database);
$mysql -> set_charset('utf8');

if($mysql == false) { echo "Erro na conexão";}

?>