<?php

session_start();

if($_SESSION['admin']!="y")
{ 
//echo $_SESSION['admin'];
header('location:lg.php');
}

include 'db_login.php';
  $result=mysql_query("SELECT * FROM events",$connection);
?>





<html>
<body><h1>IGNITIA ADMIN</h1>
<hr width=500%>
<?php include("menu.php");?>
<h2 align="center">EVENTS</h2>
<table cellspacing='0' cellpadding='25'><tr><td><div align="left">
</div></td></tr>
<td><div align="center"><?php 
   echo "<table border='1' cellpadding='25' cellspacing='0'><tr><th>NAME</th><th>EMAIL</th><th>MOBILE</th><th>COLLEGE</th><th>EVENTS</th><th>DATE OF REG</th></tr>";
  while($row=mysql_fetch_array($result))
				{ 				
				  echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['college']."</td><td>".$row['events']."</td>"."<td>".$row['date']."";
				 
                }
		echo "</table>"		
?></td></tr></table>	
</body>
</html>

<?php
mysql_close($connection);
?>