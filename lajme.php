<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lajme rreth PreventivaLab</title>

    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="lajme.css">
 

</head>
<body>
    <div class="header">
        <div class="logo"><a href="Home.html"><img src="logo.png" alt="Logo" class="foto1"></a></div>
        <div class="kontakti">
            <ul class="lista">
                <li><a href="Home.php" class="underline">Kryesore</a></li>
                <li><a href="Produktet.php" class="underline">Produktet</a></li>
                <li><a href="About us.php" class="underline">Rreth nesh</a></li>
                <li><a href="Kontakti.php" class="underline">Kontakti</a></li>
            </ul>
        </div>
    </div> 
<div class="all">
    <div class="titulli">
        <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-shadow: 2px 0 px 0px black; color: rgb(16, 134, 174);">Te fundit</h1>
    </div>
        <div class="tekst"><p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-shadow: 2px 0 px 0px black; color: rgb(16, 134, 174);"> Lajmet dhe informatat më të fundit në lidhje me Laboratorin tonë mund t'i gjeni në artikujt më poshtë.</p></div>

    <div class="main">

    <?php
require_once("dbconnect.php");

    session_start();

    $sql = "SELECT * FROM `lajmet`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="lajmi">';
            echo '<h1>' . $row['titulli'] . '</h1>';
            echo '<p>' . $row['permbajtja'] . '</p>';
            echo '<p style="color:gray;margin-top:24px;font-size:8px;">Added by admin: ' . $row['modifikuesi'] . '</p>';
            echo '</div>';
           
        }
    }elseif ($result->num_rows == 0) {
            echo 'Nuk ka lajme te reja';
    }

    

$conn->close();
?>

    </div> 
</div>
<footer>
    <div class="fundi"> <p>E drejta e autorit ©2023</p></div>
     <div class="asd">
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