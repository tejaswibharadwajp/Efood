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

<?php 
$ab=$_POST['name']; 
$pd=$_POST['pwrd'];

    $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");

$query = "SELECT * FROM restaurents WHERE rid='$ab' AND rpass='$pd' ";
$res = mysqli_query($conct,$query);
$rw=mysqli_fetch_assoc($res);
$un=$rw['rid'];
$pw=$rw['rpass'];
if($un==null || $pw==null)
{
echo("");
?>
<ul class="menu">
<li><a href="index.html" title="home page">home page</a></li>
<li><a href="sah.html" title="search-a-hotel">search-a-hotel</a></li>
<li><a href="register.html" title="register">register</a></li>
<li><a href="bs.html" title="signin">signin</a></li>
</ul>

<?php
}
else
{
?>

<ul class="menu">
<li><form action="h1.php" method="post">
<input type="hidden" name="name" value="<?php echo($ab) ?>" />
 <input type="hidden" name="pwrd" value="<?php echo($pd) ?>" />
<input type="submit" value="home" style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;" />
</form>
</li>
<li>
<form action="bs.html"  method = "post">
  <input name="submit" type="submit" value="Logout" align="right" style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;"/>
</form>
</li>
<?php
}
?>
</ul>


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




$uname=$_POST['name'];
$paswrd=$_POST['pwrd'];
$qury = "SELECT * FROM restaurents WHERE rid='$uname' AND rpass='$paswrd' ";

$reslt = mysqli_query($conct,$qury);
$row=mysqli_fetch_assoc($reslt);
$data=$row['pics'];
 $xy=$row['rid'];
$yz=$row['rpass'];
echo($xy);
 $rnam=$row['rname'];
?>
  <?php
if($xy==null||$yz==null||$xy==""||$yz=="")
{
echo("Invalid username/password");
?>

<script type="text/javascript">
function loginForm()
{
var a=document.forms["myForm"]["name"].value
var b=document.forms["myForm"]["pwrd"].value
if (a==null || a=="" || b=="" || b==null)
  {
  alert("username and password must be filled out");
  return false;
  }
}
</script>

  <form name="myForm" action="h1.php" onsubmit="return loginForm()" method="POST">
<h2 class="style17 style1">Welcome to e-FOOD </h2>
<h2 class="style17 style1">&nbsp;</h2>
<h2 class="style17 style1"><span class="style4">Restaurent Re-Login</span> </h2>
<p><br>
    <span class="style16 style5">Please ReEnter your Id and Password</span></p>
<p><br>
  <span class="style12">username:</span> 
  <input type="text" name="name"/> 
    </p>
<p><br>
  <span class="style12">password:</span> 
  <input type="password" name="pwrd"/>
    <br>
    <br>
 
  <input type="submit" value="login" style="background-color:#FF9900; color:#fff; font-size:14px"/>
</p>
</form>
<?php

}

else
{
echo ("<h3> Welcome </h3>". $row['rname']);
if($rnam=="PIZZAHUT")
{
?>
<img src="ph.png" alt="PIZZAHUT" height="128" width="128" /> 
 <?php
 }
 elseif($rnam=="KFC")
{
?>
<img src="kfc.jpg" alt="kfc"  height="128" width="128"/>
<?php
}
elseif($rnam=="DOMINOS")
{
?>
<img src="dominos.png" alt="dominos"  height="128" width="128"/>
<?php
}
else
{
?>
<img src="fx.jpg" alt="FoodEx"  height="128" width="128" />
<?php
}
?>

<form action="cuso.php" method="post">
<input type="hidden" name="uname" value="<?php echo($uname);?>" />
<input type="hidden" name="pword" value="<?php echo($paswrd);?>" />
<input type="hidden" name="resnam" value="<?php echo($rnam);?>" />
<input type="submit" value="Cust Orders" style="background-color:#FF9900; color:#fff; font-size:14px" />
</form>

<?php
}
?>


</div>

<div class="clear" style="height:20px"></div>
</div>

<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>
