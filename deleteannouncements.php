<?php
       $con = mysqli_connect("***", "***", "***","supportsite")  or die("cannot connect to database"); //Connect to database
       $Id = intval($_POST['Id']);
       $sql = "DELETE FROM `supportsite`.`announcements` WHERE `announcements`.`Id`= $Id ";
        if(mysqli_query($con, $sql)){
            header('location: Announcements.php');
        }
        else
        {
            echo" fail";
        } 
  unset($con)
?>
