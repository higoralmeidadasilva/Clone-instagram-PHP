<?php
$usuario = 'root';
$senha = '';
$dbname = 'clone_instagram';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $dbname);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>