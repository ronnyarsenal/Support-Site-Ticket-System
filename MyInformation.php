     <p class="align-right"></p>
      <h1></h1>
      <p></p>
    </div>
    <div id="main"> <a name="TemplateInfo"></a>
      <div class="box">
        <h1>My Information</h1>
      </div
      <form action="MyInformation.php" method = "post">
<?php


           $con = mysqli_connect('***','***','***', $_database); //connects to specific database based on which user logs in 
            if (!$con) 
            { 
            die('Could not connect to MySQL: ' . mysqli_error()); 
            }



//process query
$result_set = mysqli_query($con, "SELECT * FROM Information");
$num_messages = MySqli_num_rows($result_set);
?> 
<?php

echo "<table border =`1` style=background-color:#FFFFF>";

        
While($row = mysqli_fetch_array($result_set))
{
$Id = $row['Id'];
$Name = $row['Name'];
$Password = $row['Password'];
$Position = $row['Position'];
$Email = $row['Email'];





echo "<tr><td>Id: $Id</td></tr>";
echo "<td>name: $Name</td></tr>";
echo "<td>Email: $Email</td></tr>";
echo "<td>Password: $Password</td></tr>";
echo "<td>Position: $Position</td></tr>";


}
echo"</form>";
echo"</Table>";
?> 
<?php


?>

        </form>
      <a name="SampleTags"></a>
      <div class="box">

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
<p></p>
 </div>
</div>
</body>   
    </body>
</html>
