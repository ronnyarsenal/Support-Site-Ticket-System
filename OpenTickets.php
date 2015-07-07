<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet"  href="images/SupportTemplate.css" type="text/css" />
<title>Support Site</title>
</script>
</head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo">Support Site</h1>
    <div id="menu">
      <ul>
          <li><a href="Announcements.php">Home</a></li>
        <li><a href="SupportPage.php">Support</a></li>
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="#">Other</a></li>
      </ul>
    </div>
  </div>
  <div id="content-wrap">
    <div id="sidebar" >
      <h1 class="clear"></h1>
      <ul class="sidemenu">
          <li>you are currently logged in as:
          <?php
           session_start();
           if(isset($_SESSION['username']))
           {  
           $_name = $_SESSION['username'];
           echo "$_name" ;
           }            
          ?>
          </li>
      </ul>
      <ul class="sidemenu">
          <li><a href="user.php">User</a></li>
        <li><a href="#">Other</a></li>
        <li><a href="#">Other</a></li>
      </ul>
      <h1>Search</h1>
      <div class="searchform">
        <form action="#">
          <p>
            <input name="search_query" class="textbox" type="text" />
            <input name="search" class="button" value="Search" type="submit" />
          </p>
        </form>
      </div>
      <h1></h1>
      <p class="align-right"></p>
      <h1></h1>
      <p></p>
    </div>
    <div align ='center' id="main"> <a name="TemplateInfo"></a>
      <div class="box">
          <div ><h1>Open Tickets</h1>
                  <form action='close.php' method = 'post'>
            <?php

           $con = mysqli_connect('localhost','root','','tickets'); 
            if (!$con) 
            { 
            die('Could not connect to MySQL: ' . mysqli_error()); 
            }



//process query
$result_set = mysqli_query($con, "SELECT * FROM OpenTickets");
$num_messages = MySqli_num_rows($result_set);
?> 
<?php

echo "<table border =`1` style=background-color:#FFFFF>";
$num=0;
        
While($row = mysqli_fetch_array($result_set))
{
$Id = $row['Id'];
$Title = $row['Title'];
$Department = $row['Department'];
$Priority = $row['Priority'];
$Description = $row['Description'];
$Email = $row['Email'];

$Date = date ("H:i:s m-d-Y");


$num++;

echo "<tr><td>$Id</td>";
echo "<td>$Title</td>";
echo "<td>$Description</td>";
echo "<td>$Department</td>";
echo "<td>$Priority</td>";
echo "<td>$Email</td>";
echo "<td>$Date</td>";
echo "<td><form role='form' action='close.php' method='post' enctype='multipart/form-data'><input type=\"hidden\" name=\"Id\" value=\"".$row["Id"]."\">";
echo "<button type='submit' class='btn btn-default'>Close</button></form></td>";
}
echo"</form>";
echo"</Table>";
$totalopenTickets = $num;
echo"Total number of open tickets: $totalopenTickets";
?>
<a name="SampleTags"></a>

  </div>
          </div>
      </div>

</div>
<div id="footer-wrap">
  <div class="footer-left">
   <p class="align-left"></p>
  </div>
  <div class="footer-right">      
<p>    
 <?php $mysqltime = date ("m-d-Y");
      echo"$mysqltime"?>
</p>
 </div>
</div>
</html>
