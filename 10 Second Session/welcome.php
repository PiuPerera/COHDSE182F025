<?php
session_start();
echo"<font size='4' color='mediumblue'>";
echo"<br/>Hellow,".$_SESSION["user"]."<br/><br/>";
echo"<?font>";
if(isset($_SESSION["user"]) && time()-$_SESSION["accesstime"]<=10)
{
	echo"<center><h1>WElCOME.....! </h1><center><br/>";
	echo"
	<h2>*****...Welcome to System Software...*****</h2>";
	echo"<P>( Session destroy after 10 seconds)</p>";
	
}
else
{header("location:index.php");}

?>
