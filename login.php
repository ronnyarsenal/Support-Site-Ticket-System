
<!DOCTYPE HTML>
<?php
 session_start();   
?>
<html>
    <header>Support Site</header>
    <form id='login' action='checklogin.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>
</html>
