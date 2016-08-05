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
$g=$_POST['ed'];

 $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");


 mysqli_query($conct,"UPDATE regis SET fname='$a',lname='$b',address='$e',email='$g',phno='$f' WHERE uname='$c' ");
 mysqli_query($conct,"UPDATE customers SET address='$e',Name='$a' WHERE username='$c' ");
 echo("Details Updated successfully!!!");
 ?>


<form action="f1.php" method="post">
<input type="hidden" name="name" value="<?php echo($c) ?>" />
 <input type="hidden" name="pwrd" value="<?php echo($d) ?>" />
 <input type="submit" value="home"  style="background-color:#FF9900; color:#fff; font-size:14px" />
</form>


</div>

</div>

<div class="clear" style="height:20px"></div>
</div>

<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>
