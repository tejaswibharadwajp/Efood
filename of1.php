<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Restaurant Template by Templatesperfect.com Author Paarth -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurant Template by Templatesperfect.com</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {font-size: 14px}
-->
</style>
</head>

<body background="sf2.JPG">

<div id="container">

<div id="headerPan">

<?php $xy=$_POST['uname']; $yz=$_POST['pwrd'];?>
<ul class="menu">
<li><form action="f1.php" method="post">
<input type="hidden" name="name" value="<?php echo($xy) ?>" />
 <input type="hidden" name="pwrd" value="<?php echo($yz) ?>" />
<input type="submit" value="home"  style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;" />
</form></li>

<li><form action="of1.php" method="post">
<input type="hidden" name="uname" value="<?php echo($xy);?>">
<input type="hidden" name="pwrd" value="<?php echo($yz);?>">
<input type="submit" value="Order-E-food" style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;">
</form> </li>

<li><form action="bs.html"><input type="submit" value="Logout"  style="background-color:#000000; color:#FF9933; font-size:17px;font-family:Comic Sans MS;"/></form> </li>

</ul>
<?php
$xy=$_POST['uname'];
echo($xy);
?>
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
<a href="#"> <img src="images/technorati.png" alt="" /></a>
</div>  
</div>
<script type="text/javascript">
function loginForm()
{

var b=frm.check1.checked;
var c=frm.check2.checked;
var d=frm.check3.checked;
var e=frm.check4.checked;
var aa=frm.selec1.value;
var bb=frm.selec2.value;
var cc=frm.selec3.value;
var dd=frm.selec4.value;
if((b==false)&&(d==false)&&(c==false)&&(e==false)||(aa==0 && bb==0 && cc==0 && dd==0)||((b==true)&&aa==0)||((c==true)&&bb==0)||((d==true)&&cc==0)||((e==true)&&dd==0)||((b==false)&&aa!=0)||((c==false)&&bb!=0)||((d==false)&&cc!=0)||((e==false)&&dd!=0))
{
alert("Please place your order properly");
return false;
}
else
{
alert("tanq");
}
}
</script>

<div id="c2">

<div id="welcome">
<h1 class="style1">Order Your e-Food</h1>
<br />
<br />
<h3>Select your Restaurent:</h3>
<form action="or1.php" name="frm" onsubmit="return loginForm()"  method="post">

 <br />
 <select name="menu1" size="1" class="headline" >
      <option value="PIZZAHUT">PizzaHut</option>
      <option value="KFC">KFC</option>
      <option value="DOMINO'S">Dominos</option>
      <option value="FOODEX">FoodEx</option>
     </select>
	 <br />
<br />
<br />
<h3 style="color:#000099">Select your Food
  <label> <br />
  <br />
  <input type="checkbox" name="check1" value="<?php echo('Pizzas'); ?>" />
  <span class="headline style3">  Pizza </span></label>
  <br/>
  </h3>
<h4>Cost per 1 unit : Rs 90/-</h4>
<p>&nbsp;  </p>
<p style="color:#000099">Quantity:<span class="headline">
  <select name="selec1" size="1" class="headline2" >
    <option value="0">0</option>
	<option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
     
  </select>
</span></p>
<p style="color:#000099">&nbsp;</p>

<p style="color:#000099">&nbsp; </p>
<span class="headline">
<label>
<input type="checkbox" name="check2" value="<?php echo('Burgers'); ?>" />
<span class="style3"> Burgers</span></label>
</span>
<p class="headline">&nbsp;</p>
<h4>Cost per 1 unit: Rs 50/-</h4>
<p class="headline">&nbsp;</p>
<p class="headline">&nbsp;
</p>
<p><span style="color:#000099">Quantity:</span><span class="headline">
  <select name="selec2" size="1" class="headline2" >

    <option value="0">0</option
	><option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
   
  </select>
</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <span class="headline">
  <label>
  <input type="checkbox" name="check3" value="<?php echo('Hotdogs'); ?>" />
  <span class="style3">  HotDogs</span></label>
  </span></p>
<p>&nbsp;</p>
<h4>Cost per 1 unit: Rs 85/-</h4>
<p>&nbsp;</p>
<p><span style="color:#000099">Quantity:</span><span class="headline">
  <select name="selec3" size="1" class="headline2" >

    <option value="0">0</option>
	<option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4 </option>
  
  </select>
</span></p>
<p class="headline">&nbsp;</p>
<p class="headline">&nbsp;</p>
<p class="headline"><br />
  <input type="checkbox" name="check4" value="<?php echo('Combos'); ?>" />
    <span class="style3">  Combos 
      <br />
      (1pizza+1GarlicBread+SoftDrink)
      </label>
    </span></p>
<h4>&nbsp;</h4>
	  <h4>Cost per 1 unit: Rs 110/-</h4>
	  <p class="headline">&nbsp;</p>
<p><span style="color:#000099">Quantity:</span><span class="headline">
  <select name="selec4" size="1" class="headline2" >
  
    <option value="0">0</option>
	<option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4 <option>
  </select>
</span></p>
<p><br />
  <input type="hidden" name="name" value="<?php echo($xy);?>" />
  <input type="hidden" name="pass" value="<?php echo($yz);?>" />
  <input type="submit" value="order" style="background-color:#FF9900; color:#fff; font-size:14px" />
  </form>
</p>
<div class="clear"></div>
</div>

<div id="featured">



<div class="clear"></div>
</div>

</div>

<div class="clear" style="height:20px"></div>
</div>

<p><div id="footerPan">

<p>DEVELOPED BY INNOVATIVE STUDENTS OF<strong> ANDHRA UNIVERSITY</strong>(<strong>MSIT</strong>) </p>
     </div>

</div>


</body>
</html>
