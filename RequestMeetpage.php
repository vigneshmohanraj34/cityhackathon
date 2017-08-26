<html>
<head>
<title>contentpage</title>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: green;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: center;
  }

}
a:link, a:visited {
    background-color: green;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}

</style>

</head>
<body bgcolor="skyblue">

<div class="topnav" id="myTopnav">
 <a href="" ><center><h2> Venture City Hackathon</h2></center></a>
  </div>
<p align="right"><a href="logout.php" >Logout</a></p>
<br><br><br>

<center>
<?php
$email=$_GET['email'];
include('dataconnection.php'); 
$result1 = mysql_query("SELECT langitude ,purpose FROM details WHERE email= '$email'");
$row1 = mysql_fetch_array($result1); 
if($row1[1]=="Teach")
$l="Learn";           //'$row1[0]+10000'&& type='$l'
else
$l="Teach";
$result = mysql_query("SELECT name,email,mobileno FROM details where purpose='$l'");
$row=mysql_fetch_array($result);
if($row[0]==NULL)
{

echo"<script>alert('No'.$l.'in  1 km')</script>";
echo '<meta http-equiv="refresh" content="10; URL=content.php" />';
}
else
{
$o=0;
while($row=mysql_fetch_array($result))
{
$re[$o]=$row[0];
$re1[$o]=$row[1];
$re2[$o]=$row[2];
$o++;
  }}
?>
<form action="meetingpage.php" metod=POST>
<h2> Select the person</h2>
<select name="naveen">
<option value=<?php echo $re2[0]?>><?php echo "Name=".$re[0]."     email=".$re1[0];?></option>
<option value=<?php echo $re2[1]?>><?php echo "Name=".$re[1]."     email=".$re1[1];?></option>
<option value=<?php echo $re2[2]?>><?php echo "Name=".$re[2]."     email=".$re1[2];?></option>
<option value=<?php echo $re2[3]?>><?php echo "Name=".$re[3]."     email=".$re1[3];?></option>
<option value=<?php echo $re2[4]?>><?php echo "Name=".$re[4]."     email=".$re1[4];?></option>
<option value=<?php echo $re2[5]?>><?php echo "Name=".$re[5]."     email=".$re1[5];?></option>
<option value=<?php echo $re2[6]?>><?php echo "Name=".$re[6]."     email=".$re1[6];?></option>
<option value=<?php echo $re2[7]?>><?php echo "Name=".$re[7]."     email=".$re1[7];?></option>
<option value=<?php echo $re2[8]?>><?php echo "Name=".$re[8]."     email=".$re1[8];?></option>
</select>
<input type="submit" value="Search"/>
</form>
 </body>
</html>

