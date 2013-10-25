<?php
 session_start();

 
 if($_POST['Login'])
{
		//Checking the type of a user
		$user_type = $_POST['userType'];
		//User Login
		if($user_type == 'User')
		{
			$username =$_POST['username'];
			$password =$_POST['password'];
				
			//Connecting to the database
			$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
 			 mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());
			
			// Retrieve username and password from database according to user's input
			$login = mysql_query("SELECT * FROM users WHERE (username = '".$_POST['username']."') and (password  = '".$_POST['password']."')");
			//$login = mysql_query("SELECT * FROM users WHERE (username = $username) and (password  = $password") or die (mysql_error());
			
			// Check username and password match
			if (mysql_num_rows($login) > 0) 
			{
				// Jump to secured page
				header('Location: Products.php');
			}
		
	}

		//Admin Login
		if ($user_type =='Admin')
		{
			if($_POST['username'] == 'admin' &&  $_POST['password'] == 'Style2013' )
			{
		
			// Set username session variable
			$_SESSION['username'] = $_POST['username'];
			
			// Jump to secured page
			header('Location: Admin.php');
			}
			
		  }


}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login</title>
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
		<h2><strong>Style</strong></h2><br />
			<h4><a href="#"></a></h4><br />
			<p><b>Login</b> </p>
			<p>
			<form method="post" action="Login.php" id="">
			<input type="hidden" name="action" value="signup">

	<table cellspacing="4" cellpadding="0" style="border-color:#0066FF;border-width:1px;border-style:solid;color:#000000;font-family:Arial;font-size:13px;width:200px;height:70px;">
                <td colspan="5" align="center" style="height:20px;background-color:#0066CC;color:#FFFFFF;">
						Enter your details here 
						</td>
                        <tr>
   						<td><div align="right">User Type </div></td>
   						<td style="height:20px" align="left"><label>
   					 	 <select name="userType" id="userType">
       					<option value="User">User</option>
       					<option value="Admin">Admin</option>
    				 	</select>
  						 </label></td>
					</tr>
							<tr>
								<td>Username:</td>
								<td><input type ="text" name ="username"></td>
							</tr>
                            
                            <tr>
								<td>Password:</td>
								<td><input type ="password" name ="password"></td>
							</tr>
                            <tr>
                            <td></td>
                            <td><input type ="Submit" value="Login" name ="Login"></td>
							</tr>						
					</table>
                    </form>

			</li>
		  </ul>
		  <br />
		  
	</div>
				
				</p>
			<br />
			
	</div>
	<div id="left">				
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
<!-- This is our login code-->

</body>

</html>
