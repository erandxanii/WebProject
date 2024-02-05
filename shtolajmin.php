<?php
require_once("dbconnect.php");


session_start();

// Kontrollo nese forma eshte derguar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merrni të dhënat nga forma (kontrollo nese jane te definuara)
    $titulli = isset($_POST['titulli']) ? $_POST['titulli'] : "";
    $permbajtja = isset($_POST['permbajtja']) ? $_POST['permbajtja'] : "";
    $modifikuesi = $_SESSION["modifikuesi"];

 
    $sql = "INSERT INTO lajmet (titulli, permbajtja,modifikuesi)
            VALUES ('$titulli', '$permbajtja','$modifikuesi')";

    if ($conn->query($sql) === TRUE) {
        echo "Lajmi u shtua me sukses";
    } else {
        echo "Gabim gjatë regjistrimit: " . $conn->error;
    }
} else {
    echo "Kërkesa nuk është bërë me POST.";
}


$conn->close();
?>
