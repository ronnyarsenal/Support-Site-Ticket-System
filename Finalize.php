<?php

if($_POST)
{
      $con = mysqli_connect("***", "***", "***","tickets")  or die("cannot connect to database");
      $result_set = mysqli_query($con, "SELECT * FROM `closedtickets` ");
      ($row = mysqli_fetch_array($result_set));

      $Id = Intval($_POST['Id']);
      $Title = $row['Title'];
      $Priority = $row['Priority'];
      $Description = $row['Description'];
      $Department = $row['Department'];
      $Email = $row['Email'];
      $Date = date("H:i:s m-d-Y");
      

      //Deletes original copy of selected data
      $sqll = "DELETE FROM `tickets`.`closedtickets` WHERE `closedtickets`.`Id` = '$Id' LIMIT 1 ";
      mysqli_query($con, $sqll);
      //reloads page
      header('location: ClosedTickets.php');
        
        

}
     ?>
        
