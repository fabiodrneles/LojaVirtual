<?php

// db
$database = 'andes';
$servername = 'localhost';
$username = 'root';
$password = '';


$conecta = mysqli_connect($servername, $username, $password, $database);

if($conecta->connect_error) {
  die("Falha na conexão: " . $conecta->connect_error);
}