<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VONTRAA</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/inlogregistreer.css">
</head>
<body>

  <div class="container-header">
 
  <div class="wrapper-alphaheader">
 
      <div class="section section1 image">
          <a href=index.php><img id="logo" src="img/VANMOOF.jpg"></a>
         </div>  
        <div class="section section2 header">
          <div class="sectionmid section2-1">
          	<ul class="list-top">
                <li class="peace">
                    <a href="peaceofmind.php"> <strong>Peace of mind</strong> </a>
                </li>
                <li></li>
               
            </ul>
            <ul class="list-top top2">
            
                <li class="language">
                    <a href="language.php"><strong>Netherlands</strong></a>
                </li>
                <li class="support">
                    <a href="inloggen.php"><strong>Login</strong></a>
                </li>

                
                
              </ul>
        </div>

        <div class="sectionmid section2-2 header2">
              <ul class="list-top list-bottom">
                <li class="bikes">
                    <a href="productspage.php"><strong>Bikes</strong></a>
                </li>
                <li class="ride">
                    <a href="ridethefuture.php"><strong>Ride the future</strong></a>
                </li>
                
                <li class="stores">
                    <a href="stores.php"><strong>Brand stores</strong></a>
                </li>
                <li class="about">
                    <a href="about.php"><strong>About</strong></a>
                </li>
               
            
        </div>
    </div>
        <div class="section section3 winkelwagen">
                <a style="margin-left: 35px;" href = "cart.php"><img id="cart" src="img/Winkelwagen2.png";></a>
        </div>  
    </div>
    
<div id="blackbox2">
<form class="loginForm" action="login-handler.php" method="POST">   
        <div id="titel">
           <strong> LOGIN </strong>
        </div>
        <div id="line">
        </div>
        <form><br>
            E-mail: <br>
            <input type="email" id="username" name="user_email" autofocus required/><br>
            Password: <br>
            <input type="password" id="password" name="user_password" required/><br><br>
            <center>
                <input type="submit" value="LOGIN" id="loginknop">
            </center>
            <br>
        </form>
        <p> You don't have an account?<br> Register<a href="registeren.php"> here </a></p>
    </div>
</body>
</html>