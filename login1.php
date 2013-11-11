<html>
<head>



<style>
.style1 {
	color: #FFFF00;
	font-size: xx-large;
	font-weight: bold;
}
.style2 {color: #CC3300}
body {
	background-image: url(background3.jpg);
	width: 100%;
	background-repeat:no-repeat;
overflow: hidden;
}
body,td,th {
	color: #000000;
}
</style>

<script language="JAVAScript">
function check(form2)
{
var a=form2.username.value;
var p=form2.Passkey.value;
if(a=="")
{
alert("username cannot be blank!!!");
return false;
}
if(p=="")
{
alert("Please enter the password");
return false;
}
return true;
}
</script>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body vlink="white">

<form name="form2" method="post" action="login.php" onSubmit="return check(form2)">

 <p align="center" class="style1"></p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <table border=0 align="center" bgcolor="yellow"> 
 <table style="

border:1px solid white;
width:280px;
height:300px;">
	
<tr>
		<td>User Name:</td>
		<td><input type="text" name="username" size=20></td>
	</tr>
<tr>
		<td>Password:</td>
		<td><input type="password" name="password" size=20></td>
	</tr>
  <tr>

                <td>User Type:</td>
                <td><select name="usertype">
                         	<option> - select type - </option>
	<option value="Citizen">citizen</option>
	<option value="Officer">officer</option>
	<option value="Administrator">admin</option>
</select>
</tr>
<tr>
		<td>UserId:</td>
		<td><input type="text" name="userid" size=20></td>
	</tr>
<tr>
		<td><
	</tr>

	
	<tr><tr>
<tr><tr>
		<td colspan='2' align="center">
		<input type="submit" name="submit" value="Sign in"></td>
</tr></tr>
	</tr></tr>
<tr>
<td colspan='3' align="center">

<h3 text="white">
<a href="signup.html"><br> New user Signup now !!!!</span>!</td>
</h3></tr>
</table>
</form>




</style></marquee>
</div>

</body>
</html>