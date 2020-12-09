<?php  include "headers/header1.php";?>
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalkZone</title>
</head>
<body>
<form action="login.php" method="post">

    <div class="signUpbox">
        <h3 style="font-family: forte; ">Login</h3>
        <p style="color:#2554FF; font-family: ebrim;">TalkZone</p>
        <?php include('errorD.php'); ?>
        <div class="input-div">
            <label>Username</label>
            <input type="text" name="username" placeholder=" Enter username">
            <label>Password</label>
            <input type="password" name="password" placeholder=" Enter password">
        </div>
        <button style="color: white;" name="login">Sign In</button>
        <p style="margin-top: 17px; font-family: Arial; font-style: italic;">Don't Have An Account <b><a href="register.php" class="link">Sign Up</a> </b></p>
    </div>
    
</body>
</html>