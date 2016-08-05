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


<?php $uname=$_POST['name']; $pass=$_POST['pass'];?>
<ul class="menu">
<li><form action="f1.php" method="post">
<input type="hidden" name="name" value="<?php echo($uname);?>" />
  <input type="hidden" name="pwrd" value="<?php echo($pass);?>" />
  <input type="submit" value="Home"  style="background-color:#c00; color:#fff;" />
  </form></li>

<li><a href="#" title="search-a-hotel">search-a-hotel</a></li>
<li><form action="bs.html"><input type="submit" value="Logout"  style="background-color:#c00; color:#fff;"/></form> </li>
<li><a href="signin.html" title="signin">signin</a></li>
</ul>
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
</div>

<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2>&nbsp;</h2>
<h2>Find us on</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="icons"> 
<a href="#"> <img src="images/twitter.png" alt="" />  </a>
<a href="#"> <img src="images/facebook.png" alt="" />   </a>
<a href="#"> <img src="images/rss.png" alt="" /></a>
<a href="#"> <img src="images/technorati.png" alt="" /></a></div>  
</div>

<div id="c2">
  <?php

error_reporting (E_ALL ^ E_NOTICE);
    $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");

$pno=0;
$bno=0;
$cno=0;
$hno=0;

$uname=$_POST['name'];
$pass=$_POST['pass'];
$men=$_POST['menu1'];
$pza=$_POST['check1'];
$pno=$_POST['select1'];
$bur=$_POST['check2'];
$bno=$_POST['select2'];
$hd=$_POST['check3'];
$hno=$_POST['select3'];
$com=$_POST['check4'];
$cno=$_POST['select4'];

 mysqli_query($conct,"INSERT INTO cusorder VALUES('','$uname','$men',$pno,$hno,$bno,$cno)");
 echo("your Order is placed Succesfully!!!!! as follows");?>
 <br />
 <?php
 
 echo("PIZZAS : ");
 echo($pno);
 echo("<br/>");
 echo("Combos : ");
 echo($cno);
  echo("<br/>");
  echo("Burgers : ");

 echo($bno);
  echo("<br/>");
  echo("Hotdogs : ");
   echo($hno);
echo("BOOKED IN:");?>
<b><?php
echo($men);
?>
</b>

<br />
<form action="of.php" method="post">
  <p>
    <input type="hidden" name="name" value="<?php echo($uname);?>" />
    <input type="hidden" name="pwrd" value="<?php echo($pass);?>" />
    <input type="submit" value="Order Again?" />
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
</form>

<div class="clear" style="height:20px"></div>

</div>
<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>