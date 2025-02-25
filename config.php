<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "7sportsmen";

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->set_charset("utf8");

if ($conn->connect_error) {
    throw new Exception("Falha na conexão: " . $conn->connect_error);
}
?>