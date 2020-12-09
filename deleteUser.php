<?php
include "config.php";
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM userdata WHERE id=$id";
    mysqli_query($dbase, $sql);
    echo "
    <script>alert('User has been deleted');</script>
    ";
    header("location: adminPan.php?UserDeleted");
}




?>