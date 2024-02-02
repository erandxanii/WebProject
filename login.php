<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
    <div class="main">
        <h2>Login</h2>
        <form action="kyqu.php" method="POST">
          <div class="input">
            <input type="text" placeholder="Enter your email" id="email" name="email" required>
          </div>
          <div class="input">
            <input type="password" placeholder="Enter your password" id="password" name="password" required>
          </div>
          <div class="input button">
            <input type="submit">
          </div>
          <div class="text">
            <h3>Doesn't have an account? <a href="register.html">Register now</a></h3>
          </div>
        </form>
    </div>
    <script> 
        function validateLoginForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return false;
            }

            if (password.length < 6) {
                alert('Please enter a valid password');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
