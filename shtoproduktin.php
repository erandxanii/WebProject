<?php
require_once("dbconnect.php");


session_start();

// Kontrollo nese forma eshte derguar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merrni të dhënat nga forma (kontrollo nese jane te definuara)
    $titulli = isset($_POST['titulli']) ? $_POST['titulli'] : "";
    $path = isset($_POST['path']) ? $_POST['path'] : "";
    $modifikuesi = $_SESSION["modifikuesi"];

 
    $sql = "INSERT INTO produktet (emri, path ,modifikuesi)
            VALUES ('$titulli', '$path','$modifikuesi')";

    if ($conn->query($sql) === TRUE) {
        echo "Produkti u shtua me sukses";
    } else {
        echo "Gabim gjatë regjistrimit: " . $conn->error;
    }
} else {
    echo "Kërkesa nuk është bërë me POST.";
}


$conn->close();
?>
