<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Restaurant Template by Templatesperfect.com Author Paarth -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order your food onlie from e-Food</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body background="sf2.JPG">

<div id="container">

<div id="headerPan">


<ul class="menu">
<li><a href="index.html" title="home page">home page</a></li>
<li><a href="#" title="order-e-food">order-e-food</a></li>
<li><a href="#" title="search-a-hotel">search-a-hotel</a></li>
<li><a href="register.html" title="register">register</a></li>
<li><a href="bs.html" title="signin">signin</a></li>
</ul>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
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

<?php


   
$a=$_POST['name1'];
$b=$_POST['name2'];
$c=$_POST['uname'];
$d=$_POST['pwrd'];
$e=$_POST['addr'];
$f=$_POST['cno'];
$g1=$_POST['usr'];
$g2=$_POST['dom'];
$g=$g1."@".$g2;



 $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");


 mysqli_query($conct,"INSERT INTO regis VALUES('','$a','$b','$c','$d','$e','$g',$f)");
 mysqli_query($conct,"INSERT INTO customers VALUES('','$a','$c','$d','$e')");
 echo("YOU are registered successfully!!! click on login");
 ?>
 <form action="signin.html" mthod="post">
 <input type="submit" value="login" >
 </form>
 

</div>

</div>

<div class="clear" style="height:20px"></div>


<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>
