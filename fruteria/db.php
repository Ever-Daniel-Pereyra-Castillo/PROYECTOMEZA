<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fv";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Coneccion fallida o algo asi: " . $conn->connect_error);
}
?>