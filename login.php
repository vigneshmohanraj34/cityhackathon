<html>
<head><title>Login</title>
</head>
<body bgcolor="skyblue"><center>
<h1>Login section</h1>
<form action="#" method=POST><br><br><br>
<table border="0" cellpadding="20">
<tr>
<td>Username</td><td>:</td> <td><input type="text" name="user" placeholder="Enter the Email id" size="25" style="height: 30px;" required></td></tr>
 <tr><td>Password</td><td>:</td><td> <input type="password" name="pass" placeholder="Enter the Password"  size="25"  style="height: 30px;" required></td></tr><tr>
<td><h3><a href="signup.html">Signup</a></h3></td></td><td><td></td></table>
  <input type="submit" value="Submit" name="submit"/>
<p id="demo" color:"red"></p>
</form></center>
</body> 
<?php
include('dataconnection.php');  
if (isset($_POST['submit'])) 
{
    $uss = $_POST['user'];
    $pass = $_POST['pass'];
$result = mysql_query("SELECT password FROM details WHERE email= '$uss'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
  
}
$row = mysql_fetch_row($result);
if($row[0]==NULL)
{
echo"<script>alert('your are not registed please signin')</script>";
echo '<meta http-equiv="refresh" content="0; URL=signup.html" />';
}
else
{
if($row[0]==$pass)
{
echo '<meta http-equiv="refresh" content="0; URL=content.php?uss='.$uss.'"/>';
}
else
{
echo "<script>document.getElementById('demo').innerHTML='Username and Password is wrong'</script>";
}
}}
?>
</body>
</html>

