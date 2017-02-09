<?php

session_start();

if($_SESSION['admin']!="y")
{ 
//echo $_SESSION['admin'];
header('location:lg.php');
}

include 'db_login.php';
  $result=mysql_query("SELECT * FROM proto1",$connection);
?>




<html>
<body ><h1>IGNITIA ADMIN</h1>
<hr width=500%><?php include("menu.php");?>
<table cellspacing='0' cellpadding='25'><tr><td><div align="left">
</div></td></tr>
<td><div align="center"><h2 align="center">NFS - MW</h2><?php 
   echo "<table border='1' cellpadding='25' cellspacing='0'><tr><th>NAME</th><th>E-MAIL</th><th>CONTACT NO.</th><th>date of reg</th></tr>";
  while($row=mysql_fetch_array($result))
				{ 				
				  echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['date']."";
				 
                }
		echo "</table>"		
?></td></tr></table>	
</body>
</html>

<?php
mysql_close($connection);
?>