<?php
$db_servidor = 'localhost';
$db_user = 'root';
$db_password = '';
$db_nameDB = 'clone_instagram';

$conexão = new mysqli($db_servidor, $db_user, $db_password, $db_nameDB);

// if ($conexão->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conexão efetuada com sucesso";
// }
?>