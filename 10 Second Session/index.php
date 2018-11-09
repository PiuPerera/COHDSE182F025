<?php
if(isset($_POST["txtuser"]))
{
$user=$_POST["txtuser"];
$password=$_POST["txtpwd"];

$flag=0;


		if($user=="admin" && $password=="99gsp")
		{$flag=1;}
		
if($flag==1)
	{
	session_start();
	$_SESSION["user"]=$user;
	$_SESSION["accesstime"]=time();
	header("location:welcome.php");
	}
else
	{
	echo"<font color='red' size='4'>Invaild UserName Or Password</font>";
	
	}
}
?>


<html>
<head><title>Login</title>
<link href="A.css" rel="stylesheet type="text/css"/>
</head>
<body>

<center>
<form name="frmlog" method="Post" action="#" id="frmlog">
<table width="50%" height="50%">
<tr>
<td bgcolor="powderblue">User Name </td>
</tr><br/>
<tr>
<td><input type="text" name="txtuser" id="txtuser" placeholder="Your User Name..."/></td>
</tr><br/>
<tr>
<td bgcolor="powderblue">Password </td>
</tr><br/>
<tr>
<td><input type="password" name="txtpwd" id="txtpwd" placeholder="Your Password..." /></td>
</tr><br/>
<tr>
<td align="right"><input type="button" name="btnlog" value="Login" onclick="login()" /></td>
</tr>
</table>
</form>
</center>

<script type="text/javascript">
function login()
{
if(document.getElementById("txtuser").value=="")
{alert("--User Name is Missing--");}

else if(document.getElementById("txtpwd").value=="")
{alert("--Password is Missing--");}

else
{document.getElementById("frmlog").submit();}
}
</script>

</body>
</html>

