<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Contact us</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<div id="content">
<div class="header_text">
	 <div id="logo">
		<h1><a href="#">Style</a></h1>
		<h2><a href="#"><small>Fashion forever</small></a></h2>
	</div>
</div>
<div id="back">
<!-- header begins -->
<div id="header"> 
    <div class="header_image">
	
			<div id="wrapper">
				<div id="slider-wrapper">        
					<div id="slider" class="nivoSlider">
						<img src="images/header.jpg" alt="" />
						<img src="images/header2.jpg" alt=""/>
						<img src="images/header3.jpg" alt="" />
						<img src="images/header4.jpg" alt="" />
						<img src="images/header5.jpg" alt="" />
					</div>        
				</div>
			</div>
			
<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	</div>
	<div id="menu">
		<ul>
			<li><a href="Home.php"  title="">Home</a></li>
			<li><a href="Gallery.php" title="">Gallery</a></li>
			<li><a href="About.php" title="">About</a></li>
			<li><a href="Contact.php" title="">Contact</a></li>
		</ul>
	</div>
</div>
<!-- header ends -->
<!-- content begins -->
 <div id="main">
	<div id="right">
		<h2>Contact us here:</h2><br />
		
<table width="540" border="0">
  <tr>
    <td width="200">Cell  phone : </td>
    <td width="324">078 124 7941</td>
  </tr>
  <tr>
    <td>Landline : </td>
    <td>012 235 2555 </td>
  </tr>
  <tr>
    <td>Address : </td>
    <td>vander walt str building 14 </td>
  </tr>
  <tr>
    <td>Emailus on : </td>
    <td><p>style@gmail.com</p></td>
  </tr>
</table>
<br />
<h4>Send us an email:</h4>
<form  method="post" action="Contact.php" id="">
<input type="hidden" name="action" value="signup">

<table cellspacing="4" cellpadding="0" style="border-color:#0066FF;border-width:1px;border-style:solid;color:#000000;font-family:Arial;font-size:13px;width:200px;height:70px;">
<tr>
	<td colspan="5" align="center" style="height:20px;background-color:#0066CC;color:#FFFFFF;">
     Send your Email here 
     </td>
</tr>
<tr>
   <td >Fullname:</td>
   <td ><input name="fullname" type="text"/></td>
</tr>
<tr>
   <td>Email:</td>
   <td><input name="Email" type="text" /></td>
</tr>

<tr>
   <td>Comment:</td>
   <td ><textarea name="comment" cols="40" rows="20" ></textarea></td>
</tr>
<input name="Commenttype" type="hidden" value="email">
<tr>
   <td>&nbsp;</td><td><input type="submit" name="Send" value="Send" ></td>
</tr>
</table>
	</div>
	<div id="left">		
			<h3>Register or Login</h3>
			<ul>
			  <li><ul>
				  <li><a href="Login.php">Login</a></li>
				  <li><a href="Register.php">Register</a></li>
				
			  </li>
			</ul>
			<br />
			
			<h3>Calendar</h3>
			<ul>
				<li id="calendar">			
				<div id="calendar1">
					<table id="calendar2" summary="Calendar">
						<caption>
						January 2011
						</caption>
						<thead>
							<tr>
								<th abbr="Monday" scope="col" title="Monday">M</th>
								<th abbr="Tuesday" scope="col" title="Tuesday">T</th>
								<th abbr="Wednesday" scope="col" title="Wednesday">W</th>
								<th abbr="Thursday" scope="col" title="Thursday">T</th>
								<th abbr="Friday" scope="col" title="Friday">F</th>
								<th abbr="Saturday" scope="col" title="Saturday">S</th>
								<th abbr="Sunday" scope="col" title="Sunday">S</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td abbr="Des" colspan="3" id="prev"><a href="#">&laquo; Des</a></td>
								<td class="pad">&nbsp;</td>
								<td abbr="Feb" colspan="3" id="next" class="pad"><a href="#">Feb &raquo;</a></td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td colspan="2" class="pad">&nbsp;</td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
							</tr>
							<tr>
								<td>6</td>
								<td>7</td>
								<td>8</td>
								<td>9</td>
								<td>10</td>
								<td>11</td>
								<td>12</td>
							</tr>
							<tr>
								<td>13</td>
								<td>14</td>
								<td>15</td>
								<td>16</td>
								<td>17</td>
								<td>18</td>
								<td>19</td>
							</tr>
							<tr>
								<td>20</td>
								<td id="now">21</td>
								<td>22</td>
								<td>23</td>
								<td>24</td>
								<td>25</td>
								<td>26</td>
							</tr>
							<tr>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
								<td>31</td>
								<td class="pad" colspan="2">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>
		  </ul>
		  <br />
		  
	</div>
	

<!--content ends -->
<!--footer begins -->
</div>
<div id="footer">
</div>
<!-- footer ends-->
<?php
	
if($_POST['Send'])
{	//Initialising variables
	$fullname =$_POST['fullname'];
	$email =$_POST['email'];
	$comments =$_POST['comments'];
	
	//Validating user input
	if(!$fullname || !$email || !$comments)
	{
		echo'Please fill in all the fields';
		exit;   
	}
	
	if($fullname || $email || $comments)
	{
		
		//Connecting to the database
		$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
 		 mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());
		
		//Inserting into database
		$register = mysql_query("INSERT INTO users (fullname,email,comments) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[comments]')")or die(mysql_error()); 
		if(mysql_affected_rows() )
		{
			echo'Thank you for your input';
		
		}
	}
}
?>



</body>
</html>