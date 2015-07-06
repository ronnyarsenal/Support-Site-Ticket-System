<?php
if($_POST)   
{    
$con = mysqli_connect('***','***',***','supportsite'); //edited out for security reasons 
if (!$con) { 
    die('Could not connect to MySQL: ' . mysqli_error()); 
} 

 


$Title = mysqli_real_escape_string($con, $_POST['Title']);
$Description = mysqli_real_escape_string($con, $_POST['Description']);
$Date = date("m-d-Y");
$sql = "INSERT INTO `supportsite`.`announcements` (`Title`,`Description`,`Date`) VALUES ('$Title' , '$Description' , $Date)";
mysqli_query($con, $sql);

unset($con);
}
?> 

<?php
header('location:Announcements.php');

exit;
?>
