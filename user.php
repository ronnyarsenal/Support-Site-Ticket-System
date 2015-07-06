<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet"  href="images/SupportTemplate.css" type="text/css" />
<title>Support Site</title>

</head>
    <body>
<div id="wrap">
  <div id="header">
    <h1 id="logo">Support Site</h1>
    <div id="menu">
      <ul>
          <li><a href="Announcements.php">Home</a></li>
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
           echo " $_name ";         
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
    <div id="main"> <a name="TemplateInfo"></a>
      <div class="box">
        <h1>User</h1>
        <ul>
            <li><label><a href=" MyInformation.php">My Information</a></label></li>
       </ul>
      </div>
      <a name="SampleTags"></a>

        </form>
      </div>
    </div>
    <br />
  </div>
</div>
<div id="footer-wrap">
  <div class="footer-left">
   <p class="align-left"></p>
  </div>;
  <div class="footer-right">      
<p></p>
 </div>
</div>
</body>   
    </body>
</html>
