<?php 
session_start();
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You Must login first";
    header("location: login.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
if(isset($_SESSION['username']))
	{
		include "config.php"; 
		$ses = $_SESSION['username'];
		$sql="SELECT * FROM userdata WHERE username = '$ses'";

		$query = mysqli_query($dbase,$sql);

?>
<?php  include "headers/header2.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalkZone | <?= $_SESSION['username']?></title>
</head>
<body>
    <?php if(isset($_SESSION['msg'])): ?>
    <div class='error success'>
    <h3>
    <?php 
    echo $_SESSION['msg']; 
    unset($_SESSION['msg']);
    ?>
    </h3>
    </div>
    <?php endif ?>
    <div class="contain">
   <p class='wel'> Hello <b><?= $_SESSION['username']?></b><br></p> 
   <div class="text">
       <p class='w'> Welcome to the <b style="font-family: forte; text-transform: normal;"> Talkzone</b>  </p>
       <?php $row = mysqli_fetch_assoc($query) ?>
       <b>Gender: <?= $row['gender']?></b><br>
       <?php } ?>
       <b>Click Below To Join Chat</b>
    </div>
    <br><br>
    <a href="chatpage.php" class="joinBtn">Join</a>
    <?php if($_SESSION['username'] == 'Dev Crea8ive') : ?>
   <button class="btn btn-group joinBtn"><a href="adminPan.php">View AdminPanel</a></div></button>
   <?php endif ?>
   </div>
   
   
</body>
</html>