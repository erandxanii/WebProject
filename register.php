<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegisterStyle.css">
    <title>Registration</title> 
  </head>
  <body>
    
    <div class="main">
      <h2>Registration</h2>
      <form action="regjistro.php" method="post" onsubmit="return validateForm()">
        <div class="input">
          <input type="text" placeholder="Enter your name" name="emri" id="name" required>
        </div>
        <div class="input">
          <input type="text" placeholder="Enter your email" name="email" id="email" required>
        </div>
        <div class="input">
          <input type="password" placeholder="Create password" name="fjalekalimi" id="password" required>
        </div>
        <div class="input">
          <input type="password" placeholder="Confirm password" name="confirmpassword" id="confirmpassword" required>
        </div>
        <div class="policy">
          <input type="checkbox" required>
          <h3>I accept all terms & conditions</h3>
        </div>
        <div class="input button">
          <input type="submit" value="Regjistrohu">
        </div>
        <div class="text">
          <h3>Already have an account? <a href="login.php">Login now</a></h3>
        </div>
      </form>
    </div>
    <script>
      function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmpassword = document.getElementById('confirmpassword').value;

        var nameRegex = /^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
          alert('Please enter a valid name');
          return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert('Please enter a valid email address');
          return false;
        }

        if (password.length < 6) {
          alert('Please enter a valid password');
          return false;
        }

        if (password !== confirmpassword) {
          alert('Passwords do not match');
          return false;
        }

        return true;
      }
