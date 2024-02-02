<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produketet e Preventiva Lab</title>
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Produktet.css">
    <link rel="stylesheet" href="FooteriProdukteve.css">
</head>
<body>

    <div class="header">
        <div class="logo"><a href="Home.php"><img src="logo.png" alt="Logo" class="foto1"></a></div>
        <div class="kontakti">
            <ul class="lista">
            <li><a href="Home.php" class="underline">Kryesore</a></li>
                <li><a href="About us.php" class="underline">Rreth nesh</a></li>
                <li><a href="lajme.php" class="underline">Lajme</a></li>
                <li><a href="Kontakti.php" class="underline">Kontakti</a></li>
            </ul>
        </div>
    </div>
<div class="productsandtext">
    <div class="main">
        <div class="titulli">
            <h1>Produktet</h1>
        </div>
        <div class="teksti"><p>Portofoli ynë përfshin më shumë se 60 produkte; më shumë se 20 prej tyre janë biologjike. Këtu mund të gjeni listën e produkteve më të shitura të BIOCAD, të cilat ne tashmë po i eksportojmë ose jemi gati t'i eksportojmë në të ardhmen e afërt.</p></div>
    </div>
    <div class="Produketet">
        <?php
require_once("dbconnect.php");

    session_start();

    $sql = "SELECT * FROM `produktet`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="foto"><a href="#"><img src="'.$row['path'].'" alt="'. $row['emri'].'" class="produkti"></a><p>'.$row['emri'].'<br><p style="font-size:8px;color:gray;margin-top:2px;">Added by admin: ' . $row['modifikuesi'] . '</p></p></div>';
        }
    }elseif ($result->num_rows == 0) {
            echo 'Nuk ka lajme te reja';
    }

    

$conn->close();
?>
    </div>
    <br><br><br>
</div>

<footer>
    <div> <p>E drejta e autorit ©2023</p></div>
     <div>
         <ul class="footerlist">
            <a href="#" class="footerunderline"> <li class="listelements">Politika e mbrojtjes së të dhënave</li></a>
            <a href="#" class="footerunderline">  <li class="listelements">Marrëveshja e përdoruesit</li></a>
             <a href="#" class="footerunderline"> <li class="listelements">Kushtet e Përdorimit</li></a>
             <a href="#" class="footerunderline"> <li class="listelements">Cookies</li></a>
         </ul>
     </div>
     <div> <a href="https://www.linkedin.com/"><img src="LI-Logo.png" alt="Linkedin Logo" class="linkedin"></a></div>
 </footer>
</body>
</html>