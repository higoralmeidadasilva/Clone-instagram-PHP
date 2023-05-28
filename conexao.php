<?php
$db_servidor = 'localhost';
$db_user = 'root';
$db_password = '';
$db_nameDB = 'clone_instagram';

$mysqli = new mysqli($db_servidor, $db_user, $db_password, $db_nameDB);

if ($mysqli->error) {
    die("Falaha ao conectar ao banco de dados: " . $mysqli->error);
}
?>