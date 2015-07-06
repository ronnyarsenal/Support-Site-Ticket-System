<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet"  href="images/SupportTemplate.css" type="text/css" />
<title>Support Site</title>
<script src="http://cdn.ckeditor.com/4.4.7/standard-all/ckeditor.js"></script>
</head>
<body>     
<?php   
$con = mysqli_connect('***','***','***','supportsite'); // edited out for security reasons
if (!$con) { 
    die('Could not connect to MySQL: ' . mysqli_error()); 
} 
//process query
$result_set = mysqli_query($con, "SELECT * FROM announcements");
$num_messages = MySqli_num_rows($result_set);
?>

<div id="wrap">
  <div id="header">
    <h1 id="logo">Support Site</h1>
    <div id="menu">
      <ul>
        <li><a href="Announcements.php">Home</a></li>
        <li><a href="SupportPage.php">Support</a></li>
        <li><a href="logout.php"> Log Out</a></li>
        <li><a href="#">Other</a></li>
      </ul>
    </div>
  </div>
  <div id="content-wrap">
    <div id="sidebar" >
      <h1 class="clear"></h1>
      <ul class="sidemenu">

          <?php
 session_start();
   if(isset($_SESSION['username'])) {  
      $_name = $_SESSION['username'];
      echo "welcome! $_name ";
   }
          ?>
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
    <div id="main"> <a name="TemplateInfo"></a>
      <div align = 'center' class="box">
          <h1><i>Announcements</i></h1>
<?php
echo "<table border =`1` style=background-color:#FFFFF>";
$num=0;
While($row = mysqli_fetch_array($result_set))
{
$Title = $row['Title'];
$Description = $row['Description'];
$Id = $row['Id'];
$Date = $row['Date'];


echo "<tr><td>$Title</td>";
echo "<td>$Description</td>";
echo "<td>$Date</td>";
echo "<td><form role='form' action='deleteannouncements.php' method='post' enctype='multipart/form-data'><input type=\"hidden\" name=\"Id\" value=\"".$row["Id"]."\">";
echo "<button type='submit' class='btn btn-default'>Delete</button></form></td></tr>";

$num++;

}
echo"</Table>";
$totalAnnouncements = $num;
echo"Total number of announcements: $num";

?>
      <a name="body"></a>
      <table border='1' padding='1' style=background-color:#FFFFF>
      <div align= 'center'>
          <form action="newannouncement.php" method="post">
        <h1>Create New Announcements</h1>
        
        <td><div align='center'><label>Title</label>
            <input name="Title" type="text" size="34" /></div>
            <div align='center'><label>Description</label></div>
            <textarea name ="Description" id='Description'></textarea> 
            
	<script>
		CKEDITOR.replace( 'Description', {
			height: 160
		} );
         </script>
         <div align="center"><input type="submit" name="submit" class="button"/></div></td>
        </form>
      </table>
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
      <p>
   <?php $mysqltime = date ("m-d-Y");
      echo"$mysqltime"?>    
      </p>
 </div>
</div>
</body>  
</body>
<?php
?>
</html>
