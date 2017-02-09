


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$connection=mysql_connect("210.212.55.137","ignitia","psit");
if(!$connection)
{ die("error connecting to the database".mysql_error());}

mysql_select_db("ignitia",$connection);
if(!mysql_select_db("ignitia",$connection))
{die("error connecting database".mysql_error());}

$query="INSERT INTO proto1 (name , email, mobile)
VALUES ('$_REQUEST[name]', '$_REQUEST[email]', '$_REQUEST[mobile]')";

mysql_query($query,$connection);
if(!mysql_query($query,$connection))
{ die("data write failed".mysql_error());}

?>
<head>
	<title>Register Successful!</title>
     <link rel="Shortcut Icon" href="img/favicon.png">
  
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	
	<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/jquery-bp.js" ></script>
	<script type="text/javascript" src="js/navigation.js" ></script>
</head>
<body>
	<div id="header">
     <div id="bg">
    <div id="menu_bg">
	 <ul id="menu">
                <li id="menuMain">
						<a href="http://www.psit.in/ignitia" title="Main" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">MAIN</span></a>
	    </li>
				<li id="menuevent">
						<a href="http://www.psit.in/ignitia/events.html" title="Events" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">EVENTS</span></a>
	    </li>
                
                    <li id="menuContact">
						<a href="http://psit.in/ignitia/protocol" title="Protocol" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">PROTOCOL</span></a>
					</li> 
                    <li id="menuContact">
						<a href="http://www.psit.in/ignitia/autumn" title="Autumn Rock" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">AUTUMN</span></a>
					</li> 
                    <li id="menuContact">
						<a href="http://www.psit.in/ignitia/robokant" title="Robokant" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">ROBOKANT</span></a>
					</li>
                    <li id="menuContact">
						<a href="http://www.psit.in/ignitia/cause" title="Cause" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">CAUSE</span></a>
					</li>
                    <li id="menuContact">
						<a href="http://www.psit.in/ignitia#register" title="Sponsors" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">SPONSORS</span></a>
					</li>
                    <li id="menuWork">
						<a href="http://www.psit.in/ignitia/register" title="Register Here!" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">REGISTER</span></a>
	    </li>
             		<li id="menuContact">
						<a href="http://www.psit.in/ignitia#contact" title="Contact" onmousedown="this.onfocus=this.blur" onmouseup="this.onfocus=window.clientInformation?null:window.undefined"><span class="linkText">CONTACT</span></a>
					</li>  
                     		
		</ul>
</div></div><div id="logo"><img src="img/SUSESS.png" /></div></div>
	<div id="navigation" class="container">
		<div id="home" onclick="location.href='index.html';" style="cursor:pointer;" class="pri-nav"><div><a href="index.html">Events</a></div></div>
		<div id="about" onclick="location.href='atmn.html';" style="cursor:pointer;" class="pri-nav "><div><a href="atmn.html">Autumn-Rock</a></div></div>
		<div id="services" onclick="location.href='protocol.html';" style="cursor:pointer;" class="pri-nav active"><div><a href="protocol.html">protocol</a></div></div>
				
	</div>
	<div class="container">
		<div class="content">
			<div id="content-title2">
           </div><br /><br /><br /><br />
		   <div id="frm">

<table style="border: 0pt none;">
  <tbody><tr>
    <td style="width:110px; height: 25px;"><label>Name&nbsp;:</label></td>
    <td style="width: 600px;" class="txt_input_insitute"  "height: 25px;"><?php echo $_REQUEST[name];?></td>
  </tr>
  
  <tr>
  
    <td style="height: 25px;"><label>e-mail id&nbsp;:</label></td>
    <td style="height: 25px;" class="txt_input" ><?php echo $_REQUEST[email];?></td>
  </tr>
  <tr><td style="height: 25px;"><label>Contact no.&nbsp;:</label></td>
  <td style="height: 25px;" class="txt_input_phno"><?php echo $_REQUEST[mobile];?></td></tr>

   
 
  
  
</tbody></table>
<small>You are sucssesfully registered for NFS-MW Protocol. For more information about reg. fee submission and instruction refer to Protocol page</small>
		



</form>
</div>
			<!-- the rest of the content-->
		</div>
	</div>
</body>
<?php
mysql_close($connection);
?>

