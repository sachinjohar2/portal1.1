<html>
<head><title>medicine entry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
	background-image: url(images/Indian-Flag-Wallpaper-1.jpg);
}
.style2 {font-weight: bold; color: #33FF00;}
-->
</style>

<script type="text/javascript">

function check()
{
 if(document.getElementById("name").value=="")
  {
    window.alert("enter a valid name");
return false;
  }
if(document.getElementById("com").value=="")
  {
    window.alert("enter a valid company name");
return false;
  }
if(document.getElementById("dop").value=="")
  {
    window.alert("enter a valid date of purchase");
return false;
  }




if(document.getElementById("doe").value=="")
  {
    window.alert("enter a valid date of expiry");
return false;
  }
if(document.getElementById("price").value=="")
  {
    window.alert("enter Price");
return false;
  }
else if(document.getElementById("price").value<0 )
  {
    window.alert("Price cannot be negative");
return false;
  }
if(isNaN(document.getElementById("price").value))
{
window.alert("Price cannot be character");
return false;
}
if(isNaN(document.getElementById("qty").value))
{
window.alert("Quantity cannot be character");
return false;
}
if(isNaN(document.getElementById("minreq").value))
{
window.alert("Min Requirement cannot be character");
return false;
}



if(document.getElementById("minreq").value=="")
  {
    window.alert("enter minimum requirement");
return false;
  }
else if(document.getElementById("minreq").value<0 )
  {
    window.alert("minimum requirement cannot be negative");
return false;
  }
if(document.getElementById("qty").value=="")
  {
    window.alert("enter quantity");
return false;
  }
else if(document.getElementById("qty").value<0 )
  {
    window.alert("quantity cannot be negative");
return false;
  }

}

</script>

</head>              
<body>
<link rel="stylesheet" href="stylesheet.css" type="text/css">
<h1 align="center" class="style2" color=purple>medicine entry</h1>
</style>
<form name="form1" method="post" action="signup.php" onSubmit="return check(form1)">
<table border=0 align="center">
<br>
<br>
<tr>
		<td>Name:</td>
		<td><input type="textbox" name="name" id="name" size=50></td>
	</tr>


	<tr>
		<td>Company:</td>
		<td><input type="textbox" name="company" id="com" size=50></td>
	</tr>

	<tr>
		<td>Date of Purchase:</td>
		<td><input type="date" name="dop" id="dop"></td>
	</tr>
<tr>
		<td>Date of Expiry:</td>
		<td><input type="date" name="doe" id="doe"></td>
	</tr>
       <tr>
		<td>Price:</td>
		<td><input type="textbox" name="price" id="price" size=50></td>
	</tr>
              <tr>
		<td>Quantity:</td>
		<td><input type="textbox" name="quantity" id="qty" size=50></textarea></td>
	</tr>
       
  <tr>
		<td>Rack Num:</td>
		<td><input type="textbox" name="racknum" id="rack" size=50></textarea></td>
	</tr>
       
<tr>
		<td>Minimum Req:</td>
		<td><input type="textbox" name="minreq" id="minreq" size=50></textarea></td>
	</tr>

		<td><p>&nbsp;
		  </p>
		  <p>
		    <input type="submit" name="Submit" value="Submit" onClick="check()">
          </p></td>
		<td><p>&nbsp;
		  </p>
		  <p>
		    <input type="reset" name="Reset" value="Reset">
          </p></td>
	</tr></tr>
</table>
</form>
<p align="center" class="style8">copyright: Osho Bajpai &amp; co. </p>

</body>

</html>
	
