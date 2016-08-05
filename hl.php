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

<br /><br />
<br />
<br />
<br />
<br /><br /><br /><br />
<br />
<br />
<br />
<ul class="menu">
<?php $ab=$_POST['name']; echo($ab); $pd=$_POST['pwrd'];?>


<li><form action="h1.php" method="post">
<input type="hidden" name="name" value="<?php echo($ab) ?>" />
 <input type="hidden" name="pwrd" value="<?php echo($pd) ?>" />
<input type="submit" value="home" />
</form></li>
<li><a href="register.html" title="register">register</a></li>
<li><a href="signin.html" title="signin">signin</a></li>
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


    $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");


$uname=$_POST['name'];
$paswrd=$_POST['pwrd'];
$qury = "SELECT * FROM restaurents WHERE rid='$uname' AND rpass='$paswrd' ";

$reslt = mysqli_query($conct,$qury);
$row=mysqli_fetch_assoc($reslt);
 $xy=$row['rid'];
$yz=$row['rpass'];
?>
  <?php
if($xy==null||$yz==null)
{
echo "Invalid username/password";
?>


 


<?php
}

else
{
echo ("<h3> Welcome </h3>". $row['rname']);

?>

<form action="cuso.php" method="post">
<input type="hidden" name="uname" value="<?php echo($xy)?>" />
<input type="hidden" name="pword" value="<?php echo($paswrd)?>" />
<input type="submit" value="Cust Orders" />
</form>

<form action="signin.html"  method = "post">
  <input name="submit" type="submit" value="Logout" align="right" />
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
