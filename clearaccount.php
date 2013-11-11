<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><?php
session_start();
$phno=$_SESSION['phn'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$query2="update customerbuy set status='paid' where phnum='$phno'";
$result2=mysql_query($query2,$db)or die("cannot write");
header('location:index.html');

session_destroy();
echo '<p align="center" class="style8">copyright: Osho Bajpai &amp; co. </p>
';
?>