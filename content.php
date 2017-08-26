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

<center><a href="LocalScanScreen1.html" >LocalScanScreen</a> <a href="RequestMeetPage.php?email=<?php echo $_GET['uss'];?>">RequestMeetPage</a></center>

</body>
</html>

