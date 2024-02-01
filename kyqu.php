<?php
require_once("dbconnect.php");

    session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    // Prepare and execute the SQL statement using a prepared statement
    $stmt = $conn->prepare("SELECT * FROM perdoruesit WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        

        // Verify the password
        if ($password ==$row['fjalekalimi']) {
            $_SESSION['emri'] = $row['emri'];
            $_SESSION['modifikuesi'] = $row['emri'];
            echo '<script>alert("Logini ishte i suksesshem: ");</script>';
            
           if($row['roli']==0){header("Location: userdashboard.php");
            exit();
                }
           else{header("Location: admindashboard.php");
                 exit();
                }
          
        } else {
            echo '<script>alert("Fjalekalimi ishte gabim");</script>';
            header("Location: login.php");
        }
    } else {
        echo '<script>alert("Perdoruesi nuk ekziston");</script>';
        echo '<script>window.location.href = "register.php";</script>';
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Invalid request method";
}

// Close the database connection
$conn->close();
?>
