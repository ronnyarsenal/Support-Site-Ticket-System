<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet"  href="images/SupportTemplate.css" type="text/css" />
<title>Support Site</title>
</head>
    <body>
    <?php
$con = mysqli_connect('***','***','***','tickets'); //edited out for security reasons.
if (!$con) { 
    die('Could not connect to MySQL: ' . mysqli_error()); 
} 
//process query
$result_set = mysqli_query($con, "SELECT * FROM `tickets`.`closedtickets`");
?>
<div id="wrap">
  <div id="header">
    <h1 id="logo">Support Site</h1>
    <div id="menu">
      <ul>
        <li><a href="announcements.php">Home</a></li>
        <li><a href="SupportPage.php">Support</a></li>
        <li><a href="logout.php">Sign Out</a></li>
        <li><a href="#">Other</a></li>
      </ul>
    </div>
  </div>
  <div id="content-wrap">
    <div id="sidebar" >
      <h1 class="clear"></h1>
      <ul class="sidemenu">
          <p>you are currently logged in as: 
          <?php
           session_start();    
           if(isset($_SESSION['username']))
           {  
           $_name = $_SESSION['username'];
           echo "$_name ";
           }     
          ?>
          </p>
      </ul>
      <ul class="sidemenu">
          <li><a href="user.php">User</a></li>
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
      <p></p>
      <p class="align-right"></p>
      <h1></h1>
      <p></p>
    </div>
    <div align='center' id="main"> <a name="TemplateInfo"></a>
      <div class="box">
        <h1>Closed Tickets</h1>
      </div>
        <form action='Finalize.php' method = "post">
    <table border ="1" style='background-color: #FFFFFF'></table>
<?php

echo "<table border =`1` style=background-color:#FFFFF>";
$num=0;
While($row = mysqli_fetch_array($result_set))
{
$Id = $row['Id'];
$Title = $row['Title'];
$Description = $row['Description'];
$Priority = $row['Priority'];
$Email = $row['Email'];
$Date = $row['Date'];

$num++;
echo "<tr>"; 
echo "<td>$Id</td>";
echo "<td>$Title</td>";
echo "<td>$Description</td>";
echo "<td>$Priority</td>";;
echo "<td>$Email</td>";
echo "<td>$Date</td>";
echo "<td><form role='form' action='Finalize.php' method='post' enctype='multipart/form-data'><input type=\"hidden\" name=\"Id\" value=\"".$row["Id"]."\">";
echo "<button type='submit' class='btn btn-default'>Finalize</button></form></td></tr>";


}
echo"</Table>";

?>
        </form>
        <br />
      </div>
    </div>
    <br />
  </div>
</div>
<div id="footer-wrap">
  <div class="footer-left">
   <p class="align-left"></p>
  </div>
  <div class="footer-right">      
<p>     <?php $mysqltime = date ("m-d-Y");
      echo"$mysqltime"?> </p>
 </div>
</div>
</body>   
    </body>
</html>
