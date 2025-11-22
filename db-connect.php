<?php
$servername = "localhost";
$username = "root";
$password = "";   
$dbname = "devrri_hotel"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die( " Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// echo "Verbindung erfolgreich!";
?>