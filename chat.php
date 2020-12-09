<?php
session_start();
include 'config.php';
$query = "SELECT * FROM message";
$run   = $dbase->query($query);
if(mysqli_num_rows($run) > 0){
while ($row = $run->fetch_array()):
?>
<div class="mess" style="margin-top: 2%;">
    <?php
		$ses = $row['username'];
		$sql="SELECT * FROM userdata WHERE username = '$ses'";
        $que = mysqli_query($dbase,$sql);
        $rowData = mysqli_fetch_array($que);
        ?>
<?php if($rowData['gender'] == 'male') : ?>
				<img src="images/user-m.png" style="width: 20px;" alt="">
				
				<?php else: ?>
					<img src="images/user-f.png" style="width: 20px;" alt="">
					<?php endif ?>
				<b>
				<span><?php echo $row['username']; ?>      </span>
                
                <br>				
			</b>
			<?php echo  $row['message']; ?> 
			<br>
			<i style="color: rgb(255, 196, 8); text-shadow: 0px 2px 10px rgba(0, 0, 0, 0.452);">
			<?php echo  $row['time_sent']; ?>
			</i>
               

            </div>
            <?php endwhile;?>
             <?php } else {?>
                    <div class="message">
                        <b>No previous messages</b>
                    </div>
                <?php } ?>