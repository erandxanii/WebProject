<?php
// Lidhja me databazën
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regjistrimi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if ($conn->connect_error) {
    die("Lidhja me databazën dështoi: " . $conn->connect_error);
}