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
<?php 
$uname=$_POST['uname'];
$paswrd=$_POST['pword'];
?>
<li><form action="h1.php" method="post">
<input type="hidden" name="name" value="<?php echo($uname) ?>" />
 <input type="hidden" name="pwrd" value="<?php echo($paswrd) ?>" />
<input type="submit" value="Home"  style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;" />
</form></li>

<li><form action="bs.html"><input type="submit" value="Logout" style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;"/></form> </li>
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

$resnam=$_POST['resnam'];
echo($resnam);
$qury = "SELECT * FROM cusorder WHERE rest='$resnam'";

$reslt = mysqli_query($conct,$qury);

$sno=1;
?>

<table border="3" bordercolor="#FFCC00">
<tr>
  <th>Sno</th>
<th>Customer id</th>
<th>Customer Name</th>
<th>Pizzas ordered</th>
<th>HotDog ordered</th>
<th>Burger ordered</th>
<th>Combo ordered</th>
<th>Total Cost</th>
<th>Address</th>
<?php
while($row=mysqli_fetch_array($reslt))
{
$l=1;
 $res[$l]=$row['username'];
 $qury2 = "SELECT * FROM customers WHERE username='$res[$l]'";
 
 
 $resu = mysqli_query($conct,$qury2);
 $rw=mysqli_fetch_array($resu);
 
 $add=$rw['address'];
 $cnm=$rw['Name'];
$piz[$l]=$row['pizzas'];
$hot[$l]=$row['Hotdog'];
$bur[$l]=$row['burger'];
$com[$l]=$row['combo'];
$bill[$l]=$row['tcost'];

?>
</tr>
<tr>
<td><?php echo($sno); ?></td>
<td><?php echo($cnm); ?></td>
<td><?php echo($res[$l]); ?></td>
<td><?php echo($piz[$l]); ?></td>
<td><?php echo($hot[$l]);?></td>
<td><?php echo($bur[$l]);?></td>
<td><?php echo($com[$l]);?></td>
<td><?php echo($bill[$l]);?></td>
<td><?php echo($add);?></td>
</tr>
<?php
$sno++;
$l++;
}
?>
</table>
<form action="h1.php" method="post">
  <p>
    <input type="hidden" name="name" value="<?php echo($uname);?>" />
    <input type="hidden" name="pwrd" value="<?php echo($paswrd); ?>" />
    <input name="submit2" type="submit"  style="background-color:#FF9900; color:#fff; font-size:14px" color:#fff;" value="<-Back"/>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;    </p>
</form>
<li><form action="ca.php" method="post">
<input type="hidden" name="uname" value="<?php echo($ab);?>" />
<input type="hidden" name="pwrd" value="<?php echo($pd);?>" />
</form> </li>



</div>

<div class="clear" style="height:20px"></div>
</div>

<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>
