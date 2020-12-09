<?php  include "headers/header1.php";?>
<?php include('functions.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalkZone</title>
</head>
<body>
    <form action="register.php" method="post">
    
    <div class="signUpbox" style="margin-top: 100px;">
        <h3 style="font-family: forte; ">Register</h3>
        <p style="color:#2554FF; font-family: ebrima;">TalkZone</p>
        <?php include('errorD.php'); ?>
        <div class="input-div">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter username">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email"><br>
            <label for="gender">Gender</label>
            <select name="gender" class="sGen"><br>
            <option value="" selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>
            <label for="password_1">Password</label>
            <input type="password" name="password_1" placeholder="Enter password">
            <label>Password</label>
            <input type="password" name="password_2" placeholder="Confirm password">
        </div>
        <button style="color: white;" name="submit">Register</button>
        <p style="margin-top: 17px; font-family: Arial; font-style: italic;">Have An Account <b> <a href="login.php" class="link">Login</a></b></p>
    </div>
    </form>
</body>
</html>