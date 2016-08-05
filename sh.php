<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Restaurant Template by Templatesperfect.com Author Paarth -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order your food onlie from e-Food</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 16px; }
.style3 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body background="sf2.JPG">

<div id="container">

<div id="headerPan">
<ul class="menu">
<li><a href="index.html" title="home page">home page</a></li>
<li><a href="sah.html" title="search-a-hotel">search-a-hotel</a></li>
<li><a href="register.html" title="register">register</a></li>
<li><a href="bs.html" title="signin">signin</a></li>
</ul>

<p>&nbsp;</p>
</div>
</div>


<div id="contentPan">

<div id="c1">

<div id="news">
<h2>Special Offers </h2>

<p><a href="#">Get free combos</a></p>

</div>

<div id="testimonials">
<h2>User Review's </h2>
</div>

<h2>Find us on</h2>    
          <div id="icons"> 
<a href="#"> <img src="images/twitter.png" alt="" />  </a>
<a href="#"> <img src="images/facebook.png" alt="" />   </a>
<a href="#"> <img src="images/rss.png" alt="" /></a>
<a href="#"> <img src="images/technorati.png" alt="" /></a>
</div>  
</div>

<div id="c2">

<div id="welcome">

<p class="style3"><br />
 <br />
 <?php


    $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");

$resnam=$_POST['sah'];

$qury = "SELECT * FROM restaurents WHERE rname='$resnam'";

$reslt = mysqli_query($conct,$qury);

$row=mysqli_fetch_assoc($reslt);

$add=$row['address'];

echo("address of   ".$resnam."<br> <br>");
echo($add."<br> <br>");

if($resnam=="PIZZAHUT")
{
?>
<img src="aph.jpg" alt="pizzahut map"  height="" width="257"  />

<?php
}
elseif($resnam=="KFC")
{
?>
<img src="akfc.jpg" alt="kfc map"  height="500" width="500"  />
<?php
}
elseif($resnam=="DOMINOS")
{
?>
<img src="adom.jpg" alt="dominos map" height="1000" width="500" />
<?php
}
else
{
?>
<img src="afx.jpg" alt="FoodEx map"  height="500" width="500"  />
<?php
}
?>
</p>
<br />
<form action="sah.html">

<input type="submit" value="Search Again" onclick="sah.html" class="headline2" style="background-color:#FF9900; color:#fff; font-size:14px" />
</form>
<blockquote>&nbsp;</blockquote>

<div class="clear"></div>
</div>

</div>
<div class="clear" style="height:20px"></div>


<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>
</div>

</body>
</html>
