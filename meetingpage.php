<html>
<head>
<title>meeting page</title>
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
<center>
<form action="whatsapp.php?naveen=<?php echo $_GET['naveen'].'"';?> method=POST>
<h2>Enter Rquesting message</h2><br> 
<textarea name="message" rows="10" cols="30"></textarea><br>
<input type="submit" name="submit" value="send"/>
</form></center>
<body>
</html>