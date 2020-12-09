<?php
//Programmed by Goodness Jacob//
///Start Session
session_start();

//Initializing variables
$username = '';
$gender ='';
$email ='';

//Array to holds errors display
$errorD = array();

//Connect To Database
$dbase = mysqli_connect('localhost', 'root', '', 'talkzone');

if(!$dbase){
    echo "Cannot Connect to db";
}

//Define user inputs
if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($dbase, $_POST['username']);
$email = mysqli_real_escape_string($dbase, $_POST['email']);
$gender = mysqli_real_escape_string($dbase, $_POST['gender']);
$password_1 = mysqli_real_escape_string($dbase, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($dbase, $_POST['password_2']);

//If the input are wrong display Errors
if(empty($username)) {
    array_push($errorD, "Username is required");
}
if(empty($email)) {
    array_push($errorD, "Email is required");
}
if(empty($gender)) {
    array_push($errorD, "Please select your Gender, Are you Male or Female");
}
if(empty($password_1)) {
    array_push($errorD, "Password is required");
}
if($password_1 != $password_2){
    array_push($errorD, "Password's Do Not Match");
}

//Query to check if user's exist
$userCheck = "SELECT * FROM userdata WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($dbase, $userCheck);
$users = mysqli_fetch_assoc($result);
if($users){
    if($users['username'] == $username) {
        array_push($errorD, "Username Already Exist");
    }
    if($users['email'] == $email) {
        array_push($errorD, "Email Address Already Exist");
    }
}

//If errors are 0 register user
if(count($errorD) == 0) {
    $password = md5($password_1);
    $query = "INSERT INTO userdata (username, email, gender, password) VALUES('$username', '$email', '$gender', '$password')";
    mysqli_query($dbase, $query);
    $_SESSION['gender'] = $gender;
    $_SESSION['username'] = $username;

    $_SESSION['msg'] = "Welcome ".$username;

    header("location: index.php");

}
}
//Login section

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($dbase, $_POST['username']);
    $password = mysqli_real_escape_string($dbase, $_POST['password']);

    if(empty($username)) {
        array_push($errorD, "Username is required to Login");
    }
    if(empty($password)) {
        array_push($errorD, "Password is required to Login");
    }

    if(count($errorD) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM userdata WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($dbase, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['gender'] = $gender;
            $_SESSION['msg'] = "Logged in Successfully "."Your username: ".$username;
            header("location: index.php");
        }else{
            array_push($errorD, "Wrong username/password and gender Combination");
        }
    }
}



?>