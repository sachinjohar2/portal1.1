<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style><?php
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

//echo "Your order to purchase  is as follows ::::<br><br>";
$query1="select * from customer";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
echo "<html><body><table border=5>";
echo"<tr><td><b><i>S.no<td><b><i>Name<td><b><i>Phone Num<td><b><i>Description";
$f=1;
$tot=0;
while($info=mysql_fetch_array($query))
{  
echo "<tr><td>";
Echo $f . "<td>";
Echo $info['name']."<td>";
Echo $info['phonenum']."<td>";
Echo $info['description']."<td>";
$f++;
}


echo "</table></body></html>";
//echo"<br><br>Total balance is <b><i><u>".$tot;
echo'<p align="center" class="style8">copyright: Osho Bajpai &amp; co. </p>';
?>