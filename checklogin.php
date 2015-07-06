<?php
  

$host="***"; // Host name 
$username="***"; // Mysql username 
$password="***"; // Mysql password 
$db_name="login"; // Database name 
$tbl_name="login_info"; // Table name 

if($_POST)   
{  

// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
}

// username and password sent from form 
$myusername = mysqli_real_escape_string($con, $_POST['username']); 
$mypassword = mysqli_real_escape_string($con, $_POST['password']); 


$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);
$sql= "SELECT * FROM `login_info` WHERE `username` LIKE '$myusername' AND `password` LIKE '$mypassword'";
$result = mysqli_query($con, $sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();
// Register $myusername, $mypassword and redirect"
$_SESSION['username']= mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['password']= mysqli_real_escape_string($con, $_POST['password']); 
header("location: successfullogin.php");
}
else {
header('location:login.php');
}
?>
