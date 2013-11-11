<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><?php
$phno=$_POST['phnum'];
session_start();
$_SESSION['phn']=$phno;
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

$query2="select * from customer where phonenum='$phno'";
$result2=mysql_query($query2,$db)or die("cannot write");
while($info2=mysql_fetch_array($result2))
{  
if($info2['name']!="")
{
echo"<h2 align='center'>Shyam Medical Store<br>1278,Ratan lal nagar,Kanpur-22</h2>";
echo "<h3 align='left'>xxxxxx</h3><h2 align='right'>".date('d-m-Y')."</h2>"; 
echo "<h4 align='center'";
Echo "<br><b><i><u>Name:::".$info2['name']."<br>";
Echo "Description:::".$info2['description']."<br>";
Echo "</b></i></u><br><br>";



echo "Your bill is as follows ::::<br><br>";
$query1="select * from customerbuy where phnum='$phno' and status='Pending' order by time";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
echo "<html><body><table border=2>";
echo"<tr><td><b><i>Name<td><b><i>Quantity<td><b><i>Price<td><b><i>Time<td></b></i>";
while($info=mysql_fetch_array($query))
{  
echo "<tr><td>";
Echo $info['name']."<td>";
Echo $info['qty']."<td>";
 Echo $info['price']."<td>"; 
 Echo $info['time']."<td>";
$f=$f+$info['qty']*$info['price'];
}
//if($info['name']=="")
//echo "invalid entry";
echo "</table>";
echo "<b><i><u><br><br>Final bill is       <b> <u>".$f;

echo "<br><form name='form2' method='POST' action='clearaccount.php'>
<input type='submit' name='submit' value='Pay'>";
echo "</table></body></html>";
echo '<p align="center" class="style8"><br><br><br><br><br><br><br><br><br><br><br>copyright: Osho Bajpai &amp; co. </p>';
}
if($info2['name']=="")
{
echo "invalid phone number";
}
}
?>