<?php 
 // you have to open the session first 
 session_start(); 
 
 //remove all the variables in the session 
 session_unset(); 
 
 // destroy the session 
 session_destroy();  
 ?> 

<html>
<head>
<title>login</title></head>
<form action="verify.php" method="post">
<label>user id <input type="text" name="userid" id="userid" value="admin"></label>
<label>password</label><input type="password" name="pass" id="pass" value="">
<input type="submit" name="submit" value="login">
</form>
</html>