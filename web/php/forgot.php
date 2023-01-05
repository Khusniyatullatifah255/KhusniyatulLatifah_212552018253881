<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form">
        <h2>Forgot Password</h2>
        <p>Enter your email address</p>
        <form action="change.php" enctype="multipart/form-data" method="POST">
            <div class="error-text">Error</div> 
            <div class="input">
                <input type="email" name="email" placeholder="Enter Your Email" required >
            </div>
            <div class="submit">
                <input type="submit" value="Continue" class="button">
            </div>
        </form>
        <div class="link" style="text-align: center;"><a href="login.php">Back to Login</a></div>
    </div>
    <script src="../js/Forget.js"></script>
</body>
</html>