<?php



session_start();


if (!isset($_SESSION["emri"])) {
    header("Location: login.php"); 
    exit();
}

$emri = $_SESSION["emri"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        *{
            background-color: lightblue;
        }
        .butoni{
            margin-left: 20px;
            width: 120px;
            height: 30px;
            border-radius: 4px;
        }
    </style>

</head>
<body>
    <h2>Miresevini ne dashboard <?php echo $emri; ?>, ju lutem zgjedhni se ku do te vazhdoni</h2>

    <a href="shtoproduktin.html"><button class="butoni">Produktet</button></a>
    <a href="mesazhet.php"><button class="butoni">Lexo Mesazhet</button></a>
    <a href="shtolajmin.html"><button class="butoni">Lajmet</button></a><br>

    <a href="logout.php"><button class="butoni" style="margin-top:100px">Dilni</button></a>


</body>
</html>