<?php
require_once("dbconnect.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $emri = isset($_POST['emri']) ? $_POST['emri'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $fjalekalimi = isset($_POST['fjalekalimi']) ? $_POST['fjalekalimi'] : "";
    $confirmpassword = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : "";

    
    if ($fjalekalimi !== $confirmpassword) {
        echo "Passwords do not match";
        exit;
    }

    $checkEmailQuery = "SELECT * FROM perdoruesit WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Ekziston një perdorues me këtë email. Ju lutemi, përdorni një email tjetër.";
        exit;
    }

    
    $sql = "INSERT INTO perdoruesit (emri, email, fjalekalimi)
            VALUES ('$emri', '$email', '$fjalekalimi')";

    if ($conn->query($sql) === TRUE) {
        echo "Regjistrimi u krye me sukses!";
    } else {
        echo "Gabim gjatë regjistrimit: " . $conn->error;
    }
} else {
    echo "Kërkesa nuk është bërë me POST.";
}


$conn->close();
?>
