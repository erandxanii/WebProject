<?php
require("dbconnect.php");



// Kontrollo nese forma eshte derguar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merrni të dhënat nga forma (kontrollo nese jane te definuara)
    $emri = isset($_POST['emri']) ? $_POST['emri'] : "";
    $mbiemri = isset($_POST['mbiemri']) ? $_POST['mbiemri'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mesazhi = isset($_POST['mesazhi']) ? $_POST['mesazhi'] : "";



    // Shto të dhënat në bazën e të dhënave
    $sql = "INSERT INTO kontakti (emri,mbiemri, email, mesazhi)
            VALUES ('$emri','$mbiemri', '$email', '$mesazhi')";

    if ($conn->query($sql) === TRUE) {
        echo "Mesazhi u dergua me sukses";
    } else {
        echo "Gabim gjatë dergimit te mesazhit: " . $conn->error;
    }
} else {
    echo "Kërkesa nuk është bërë me POST.";
}

// Mbyll lidhjen me databazën
$conn->close();
?>
