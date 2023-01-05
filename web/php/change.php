<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form">
        <h2>Change Password</h2>
        <form action="login.php" method="post">
            <div class="error-text">Error</div> 
            <input type="hidden" name="email" value="<?php $_SESSION['email']; ?>">
            <div class="input" style="margin: 10px 0;">
                <input type="password" name="npass" placeholder="Create new password" required >
            </div>
            <div class="input" style="margin: 10px 0;">
                <input type="password" name="cmpass" placeholder="Confirm password " required >
            </div>
            <div class="submit">
                <input type="submit" value="Continue" class="button">
            </div>
        </form>
    </div>
    <script src="../js/changepw.js"></script>
</body>
</html>