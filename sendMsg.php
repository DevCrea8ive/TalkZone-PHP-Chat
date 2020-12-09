<?php

include "config.php";
session_start();
if(isset($_POST['send'])) {
	$ses = $_SESSION['username'];
	$sqll="SELECT * FROM userdata WHERE username = '$ses'";
	$que = mysqli_query($dbase,$sqll);
	$rowData = mysqli_fetch_array($que);
	$username = $_SESSION['username'];
	$gender = $rowData['gender'];
	$msg = $_POST['msg'];
	$sql = "INSERT INTO message(username, gender, message) VALUES ('$username', '$gender', '$msg')";
	$query = mysqli_query($dbase, $sql);

	if($query){
		header("location: chatpage.php");
	}else{
		echo "
		<div class=\"err\">Something went wrong</div>
		";
	}
}
