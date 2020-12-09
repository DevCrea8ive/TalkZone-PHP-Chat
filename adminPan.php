<?php 
session_start();
if($_SESSION['username'] == 'Dev Crea8ive') {
    $_SESSION['msg'] = "Welcome Admin";
}else{
    $_SESSION['msg'] = "You Cannot view admin panel";
    header("location: index.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
if(isset($_POST)) {
include "config.php";
$sql = "SELECT * FROM userdata";
$query =  mysqli_query($dbase, $sql);
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
<body >

    <div class="contain">
    <a href="chatpage.php" class="joinBtn">Back to ChatPage</a>
   <p class='wel'> Hello <b><?= $_SESSION['username']?></b><br></p> 
   <div class="text">
       <p class='w'> Welcome <b style="font-family: forte; text-transform: normal;"> Admin</b>  </p>
       <b>Gender: <?= $_SESSION['gender']?></b><br>

       <b>Total Users in Talkzone</b>
       <hr>
    </div>
    
   </div>
   <div class="container table-responsive">

 <table class="table" style="background: black; color: white; overflow-x: visible;">
            <tr>
                <thead>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Time Created</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            </tr>
           <?php while($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
            <td><b><?php echo $row['id']?></b></td>
                <td><b><?php echo $row['username']?></b></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['created_at']?></td>
                <td><?php echo $row['password']?></td>
                <td><a href="deleteUser.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete User</a></td>
            </tr>
            <?php } if($row['id'] == 'null'){ ?>
                <div class="container table-responsive">
                    <b>No users available.....</b>
                </div>
            <?php } ?>
        </table>
    </div>
</body>
    </html>
    <?php } ?>
