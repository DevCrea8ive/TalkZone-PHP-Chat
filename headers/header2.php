<?php include "./config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
         @media (max-width: 1000px){
    .menu h4{
        margin-right: 28px;
        text-align: center;
    }
    ul li{
        margin-right: -90px;
    }
    .logo h2{
        margin-top: -2px;
        
    }
}
    </style>
<div class="menu">
    <div class="logo">
    <h2><a href="./index.php">TalkZone</a> </h2>
    
    </div>
    <h4 style="text-align: center; margin-left: -450px; color: rgb(183, 0, 255); text-shadow: 0px 2px 10px rgba(0, 0, 0, 0.452); font-size: 15px;">You are logged in as: <?= $_SESSION['username']; ?></h4>
<div class="menu-items">
    <nav>
        <ul>
            
        <li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </nav>
</div>
    </div>
    
</body>
</html>