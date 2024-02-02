<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesazhet</title>
    <style>
        *{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    


<?php
require_once("dbconnect.php");

$sql = "SELECT * FROM kontakti";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"Mesazhet e derguara nga klientet";
    echo "<table border=2>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Mesazhi</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_kontakti"] . "</td>   
                <td>" . $row["emri"] . "</td>
                <td>" . $row["mbiemri"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["mesazhi"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Nuk ka mesazhe në bazën e të dhënave.";
}


$conn->close();
?>






</body>
</html>