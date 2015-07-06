<?php 
  
$con = mysqli_connect('****','***',***','tickets'); //edited out for security reasons.
 
$Priority = mysqli_real_escape_string($con,$_POST['Priority']);
$Title = mysqli_real_escape_string($con, $_POST['Title']);
$Department = mysqli_real_escape_string($con, $_POST['Department']);
$Description = mysqli_real_escape_string($con, $_POST['Description']);
$Email = mysqli_real_escape_string($con, $_POST['Email']);
$mysqltime = date ("m-d-Y");

$sqlll = " INSERT INTO `tickets`.`opentickets` (`Title`, `Priority`, `Description`,`Department`,`Email`, `Date`) VALUES ('$Title', '$Priority', '$Description','$Department','$Email','$mysqltime')";
mysqli_query($con, $sqlll);
   
 

?> 
<?php

header('location: NewTicketPage.php'); //redirects back 

?>
