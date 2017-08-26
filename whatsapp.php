<?php
$num=$_GET['naveen'];
$result = mysql_query("SELECT email FROM details WHERE mobileno='$num'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
  
}
$row = mysql_fetch_row($result);
$to = "nebulamohan@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: nebulamohan@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?> 