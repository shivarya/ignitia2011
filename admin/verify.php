<?php
session_start(); 
$username=$_POST['userid'];
$pass=$_POST['pass'];

if($username=="admin" && $pass=="ashz8henry")
{
$_SESSION['admin']="y";
header('location:events.php');
}
else
{
//echo $username. " ----" . $pass;
header('location:lg.php');
}
?>