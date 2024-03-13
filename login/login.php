<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="login.css">
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
            <div class="login-form">
                <h1>LOG IN</h1>
                <form action="../admindashboard2/admindashboard2.php" method="POST">
                    <div class="input-group">
                        <label for="email">E-MAIL ADDRESS</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="input-group">
                        <button type="submit">LOG IN</button>
                    </div>
                </form>
                <p>Don't have account? <a href="../register/register.php">Sign Up</a></p>
            </div>
        </div>
    </div>

</body>
</html>
