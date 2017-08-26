<?php
include('dataconnection.php'); 
   $name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];
$type = $_POST['type'];
$Latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
if(strlen($mobile)!=10 ||strlen($pass)!=10)
{
echo '<meta http-equiv="refresh" content="0; URL=signup.html" />';
}
else
{

$sql="INSERT INTO details VALUES('$name','$email','$mobile','$type','$pass','$Latitude','$longitude')";
if(!mysql_query($sql,$con))
{
die('error:'.mysql_error());
}
echo"<script>alert('<b>Register Successfully</b>')</script>";
echo '<meta http-equiv="refresh" content="0; URL=login.php" />';
}
?>