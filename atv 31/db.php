<?php
session_star()
Shost="localhost";
Shost="root";
$password = "";
$dbname  = "login_db";

$conn = new mysqli($host,$user,$paaword,$dhoname);

if ($conn->$connect_error) {
    die("Conexão falhou:".$connect_error);
}
?>