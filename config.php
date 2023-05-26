<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'clone_instagram';

$conexão = new mysqli($host, $dbusername, $password, $dbname);

// if($conexão->connect_errno){
//     // die("Falha ao conectar ao banco de dados: " . $mysqli->error);
//     echo "Erro ao conecter";
// }else {
//     echo "Conexão efetuada com sucesso";
// }
?>