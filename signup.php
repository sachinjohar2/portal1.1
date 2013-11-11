<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><?php
$name=$_POST['name'];
$company=$_POST['company'];
$dop=$_POST['dop'];
$doe=$_POST['doe'];

$rknum=$_POST['racknum'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

$minreq=$_POST['minreq'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
if($minreq=='')
{
$query="insert into medicines(name,company,dop,doe,price,quantity,rack) values('$name','$company','$dop','$doe','$price','$quantity','$rknum')";
mysql_query($query,$db)or die("Medicine Already exist Change the name");
}
else
{
$query="insert into medicines(name,company,dop,doe,price,quantity,rack,min_req) values('$name','$company','$dop','$doe','$price','$quantity','$rknum','$minreq')";
mysql_query($query,$db)or die("Medicine Already exist Change the name");

}

echo "Medicine added successfully !!!!<br>";
echo "<html><body><a href='medicineentry.php'>Click to add more medicines
<br><br>
<a href='admin.html'>To go to Admin Page";



?>
