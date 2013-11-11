<style type="text/css">
<!--
.style1 {color: #000000}
body,td,th {
	color: #000000;
}
-->
</style>
<span class="style1"></span>
<?php

$usr=$_POST['username'];
$pass=$_POST['password'];
$utype=$_POST['usertype'];
$uid=$_POST['userid'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$query="select name,uniqueid,confirmation,usertype from user where username='$usr' and password='$pass'";
$result=mysql_query($query,$db)or die("cannot get");
$e=mysql_fetch_array($result);
$f= $e[uniqueid];
$j=$e[usertype];
$k=$e[confirmation];
if($f==$uid && $j=="admin" && $k=="yes")
{

header("location:admin.html");
}
elseif($f==$uid && $j=="citizen" && $k=="yes")
{
header("location:citizen.html");
}
elseif($f==$uid && $j=="officer" && $k=="yes")
{
header("location:officer.html");
}
else
{



header('refresh:2;url=login.html');}


?>
