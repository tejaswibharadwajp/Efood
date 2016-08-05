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
<?php $ab=$_POST['uname']; echo($ab); $pd=$_POST['pword'];?>


<li><form action="f1.php" method="post">
<input type="hidden" name="name" value="<?php echo($ab) ?>" />
 <input type="hidden" name="pwrd" value="<?php echo($pd) ?>" />
 <input type="submit" value="home" style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;" />
</form></li>
<li><form action="of1.php" method="post">
<input type="hidden" name="uname" value="<?php echo($ab);?>">
<input type="hidden" name="pwrd" value="<?php echo($pd);?>">
<input type="submit" value="Order-E-food"style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;">
</form> </li>
<li><form action="bs.html"><input type="submit" value="Logout"  style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;"/></form> </li>
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

<script type="text/javascript">
function check12()
{
 var a=frm.name1.value;
 var b=frm.name2.value;
 var c=frm.cno.value;

 if(!is_nan(c))
 {
 alert("please reenter");
 return false;
 }


 alert("hello");
 
 }
 </script>
<div id="c2">
  <?php


    $conct=mysqli_connect("localhost", "root");
   if(!$conct)
    {
     die('Could not connect : ' . mysqli_error());
     } 
    mysqli_select_db($conct,"test");


$uname=$_POST['uname'];
$paswrd=$_POST['pword'];
$qury = "SELECT * FROM regis WHERE uname='$uname' AND pass='$paswrd' ";

$reslt = mysqli_query($conct,$qury);
$row=mysqli_fetch_assoc($reslt);
 $a=$row['lname'];
$b=$row['pass'];
$c=$row['fname'];
$d=$row['address'];
$e=$row['email'];
$f=$row['phno'];
?>
<form name="frm" action="dsaved.php"  method="post">
First name:
        <input type="text" name="name1" value="<?php echo($c);?>" /> 
      </span></p>
      <p align="left"><span class="style7"><br>     
        Last name: 
        <input type="text" name="name2" value="<?php echo($a);?>" />
          </span></p>
  
        
      <p align="left" class="style2">&nbsp;</p>
      <p align="left"><span class="style7 style2">Address(For home delivery):  
        </span>
              <input type="text" name="addr" value="<?php echo($d);?>"  />
        </p>
      <p align="left">&nbsp;</p>
      <p align="left"><span class="style7 style2">Contact no  </span>
        <input type="text" name="cno" maxlength="10" value="<?php echo($f);?>" />
      </p>
      <p align="left">&nbsp;</p>
      <p align="left"><span class="style7">E-mailid</span>
        <input type="text" name="ed" value="<?php echo($e);?>" />
		<br />
		<input type="hidden" name="uname" value="<?php echo($ab);?>" />
		 <input type="hidden" name="pwrd" value="<?php echo($pd) ?>" />
        <input name="submit" type="submit" onclick="check12()" class="headline2"  style="background-color:#FF9900; color:#fff; font-size:14px" value="Save My Details" />
      
</form>
		
<br>
</div>
<div class="clear" style="height:20px"></div>
</div>

<div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
</div>

</div>


</body>
</html>
