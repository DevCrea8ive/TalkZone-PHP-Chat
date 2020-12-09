<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
		include "headers/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `message`";

		$query = mysqli_query($dbase,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TalkZone | <?= $_SESSION['username']?></title>
	<script type="text/javascript">
		function ajax(){
		var req=new XMLHttpRequest();
		req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
		document.querySelector(".message").innerHTML=req.responseText;

	}

	}
	req.open('GET','chat.php',true);
	req.send();


	}
	setInterval(function(){ajax()},1000);

	</script>
</head>
<body onload="ajax()">
    <div class="msgBox">
		<div class="message">
			<div class="media">
			<div class="media-body">
				

			</div>
			</div>
		</div>
		
		


<form class="form-horizontal" method="post" action="sendMsg.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
      </div>
      <div class="col-sm-20">
        <button type="submit" name="send" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i></button>
	  </div>
        
        </form>
</div>
<style>
    @media (max-width: 1000px){
    .msgArea textarea{
        width: 300px;
        margin-left: -100px;
    }
}
</style>
<?php if($_SESSION['username'] == 'Dev Crea8ive') : ?>
   <a href="adminPan.php" class="joinBtn">View AdminPanel</a>
   <?php endif ?>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>