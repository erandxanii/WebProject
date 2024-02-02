<?php
require("dbconnect.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $emri = isset($_POST['emri']) ? $_POST['emri'] : "";
    $mbiemri = isset($_POST['mbiemri']) ? $_POST['mbiemri'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mesazhi = isset($_POST['mesazhi']) ? $_POST['mesazhi'] : "";

    if($emri==null){
        echo"Emri nuk mund te jet null";
        exit;
    }

    if($mbiemri==null){
        echo"Mbiemri nuk mund te jet null";
        exit;
    }
    if($email==null){
        echo"Email nuk mund te jet null";
        exit;
    }
    if($mesazhi==null){
        echo"Mesazhi nuk mund te jet null";
        exit;
    }



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


$conn->close();
?>
