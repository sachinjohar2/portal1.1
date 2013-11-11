<?php
$name=$_POST['name'];
$password=$_POST['password'];
$username=$_POST['username'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$query="insert into user(name,password,username,email,dob,gender,address) values('$name','$password','$username','$email','$dob','$gender','$address')";
mysql_query($query,$db)or die("cannot write");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<h2>Thankyou for registering,</h2>
<p>Your Unique code for future log in is: </p>
<?php
$query1="select uniqueid from user where username='$username' and password='$password'";
$result1=mysql_query($query1,$db)or die("cannot write");
$c=mysql_fetch_row($result1);
foreach($c as $e)
{
echo $e;
}
?>
<p>Kindly save it.<br />

Regards:</p>
<p><a href="index.html"><strong>Login now</strong></a></p>
<p>Admin<a href="login.html"></a></p>
</body>
</html>
