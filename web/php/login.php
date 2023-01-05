<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Form.css">
</head>
<body>
    <div class="form">
        <h2>Login Form</h2>
        <p>Login with your email and password</p>
        <form action="index.php" enctype="multipart/form-data">
            <div class="error-text">Error</div>
            <div class="input">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" values ="<?php if (isset($_COOKIE['email']))?>"required >
            </div>
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password" required>
                </div>
            <div class="remember">
                <input type="checkbox" name="remember_me" value = "1" id="remember">
                <label for="remember-me">Remember Me</label>
            </div>
            <div class="submit">
                <input type="submit" value="Login" class="button" a>
            </div>
        </form>
        <div class="link" >Not signed up? <a href="register.php">Register Now</a></div>
        <div class="link"><a href="forgot.php">Forgot your password?</a><forget class=""></forget></div>
    </div>
    <script src="../js/Login.js"></script>
</body>
</html>