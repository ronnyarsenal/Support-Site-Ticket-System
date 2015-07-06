<?php

if($_POST)
{
      $con = mysqli_connect("***", "***", "***","tickets")  or die("cannot connect to database"); //edited out for security reasons.
      $result_set = mysqli_query($con, "SELECT * FROM `opentickets` ");
      ($row = mysqli_fetch_array($result_set));

      $Id = Intval($_POST['Id']);
      $Title = $row['Title'];
      $Priority = $row['Priority'];
      $Description = $row['Description'];
      $Department = $row['Department'];
      $Email = $row['Email'];
      $Date = date("H:i:s m-d-Y");
      
      // inserts a copy of the selected data
       $sql = "INSERT INTO `tickets`.`closedtickets` (`Id`, `Title`, `Description`, `Priority`, `Department`, `Email`,`Date`) VALUES  ('$Id', '$Title', '$Priority', '$Description', '$Department', '$Email', '$Date')";
       if(mysqli_query($con, $sql))
        { 
           //Deletes original copy of selected data
          $sqll = "DELETE FROM `tickets`.`opentickets` WHERE `opentickets`.`Id` = '$Id' LIMIT 1 ";
          mysqli_query($con, $sqll);
          //reloads page
          header('location: OpenTickets.php');
        
        }
           
        else
        { 
            echo "fail";    
        }
}
     ?>
