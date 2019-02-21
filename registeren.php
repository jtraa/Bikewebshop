<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://use.typekit.net/xio8wiu.css">
</head>
<body>
    <div id="blackbox">
        <div id="titel">
            REGISTER
        </div>
        <div id="line">
        </div>
        <form class="modal-content" action="register-handler.php" method="POST">
            E-mail:<br>
            <input type="email" name="email" required><br>
            Password:<br>
            <input type="password" name="password" required><br>
            By creating an account you agree to our
            <a href="">Terms & Privacy</a>.<br><br>
            <center>
                <input type="submit" value="REGISTER" id="loginknop">
            </center>
        </form>
        <p> You have an account already? Login<a href="inloggen.php"> here </a></p>
    </div>
</body>
</html>