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
  <input type="submit" value="Home"  style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;" />
  </form></li>


<li><form action="bs.html"><input type="submit" value="Logout"  style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;" /></form> </li>

</ul>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
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
$pno=$_POST['selec1'];
$bur=$_POST['check2'];
$bno=$_POST['selec2'];
$hd=$_POST['check3'];
$hno=$_POST['selec3'];
$com=$_POST['check4'];
$cno=$_POST['selec4'];

$bill=($pno*90)+($cno*110)+($bno*50)+($hno*85);
$a=$pno*90;
$b=$cno*110;
$c=$bno*50;
$d=$hno*85;

 mysqli_query($conct,"INSERT INTO cusorder VALUES('','$uname','$men',$pno,$hno,$bno,$cno,$bill)");
 echo("your Order is placed Succesfully!!!!! as follows");?>
 <br />
 <?php
 if($pno!=0)
 {
 echo("PIZZAS :   ".$pno."   *  90 =    ".$a);

 
echo("<br/>");
 }

 if($cno!=0)
 {
 echo("COMBOS :   ".$cno."   * 110 =    ".$b);

 echo("<br/>");
  }
 
  if($bno!=0)
  {
 echo("BURGERS :   ".$bno."   *  50 =    ".$c);

 echo("<br/>");
 
  }
  
  if($hno!=0)
  {
  echo("HOTDOGS :   ".$hno."   *  85 =    ".$d);
  echo("<br/>");
   }
   echo("<h3>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h3>=    Rs  ".$bill);
echo("<br> BOOKED IN:");?>
<b><?php
echo($men);
?>
</b>

<br />
<form action="of1.php" method="post">
 
    <input type="hidden" name="uname" value="<?php echo($uname);?>" />
    <input type="hidden" name="pwrd" value="<?php echo($pass);?>" />
    <input type="submit" value="Order Again?" style="background-color:#FF9900; color:#fff; font-size:14px" />

</form>





</div>

<div class="clear" style="height:20px"></div>
</div>

<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>
