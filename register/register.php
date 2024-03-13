<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="register.css">
<link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="container">
        
        <header class="main-header">
            <a href="../landing/landing.php">
                <img src="../Images/home.svg" alt="Home">
            </a>
        </header>

        <div class="login-container">
            <div class="login-logo">
                <img src="../Images/logo.svg" alt="MARIANA ZAINAL">
            </div>

            <form class="register-form" action="../studentdashboard/studentdashboard.php" method="post">
            <div class="form-field">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-field">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-field">
                <input type="submit" value="Register">
            </div>

            <div class="form-footer">
            <a href="../login/login.php">Already have an account? Login here</a>
            </div>
            </form>
        </div>
    </div>

</body>
</html>
