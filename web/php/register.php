<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" 
          content="IE=edge">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>
        Register 
    </title>
    <link rel="stylesheet" href="../css/Form.css">

</head>
<body>
    <div class="form">
        <h2>Register Form</h2>
        <p>It's free and always will be.</p>
        <form action="login.php"> 
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*">
                </div>
                <div class="input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
                </div>
            </div>
            <div class="input">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" required >
            </div>
            <div class="input">
                <label>Phone</label>
                <input type="phone" 
                       name="phone" placeholder="Phone Number" required pattern="[0-9]{13}" oninvalid="this.setCustomValidity('Enter 13 Digits Number')" oninput="this.setCustomValidity('')">
            </div>
            <div class="grid-details">
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password" required>
                </div>
                <div class="input">
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Register" class="button">
            </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
    </div>
    <script src="../js/Register.js"></script>
</body>
</html>