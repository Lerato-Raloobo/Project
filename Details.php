<?php
 session_start();
 $_SESSION['Shopping'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Mens</title>
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

<h3>Enter your personal details to finish the transaction :</h3>

    <form name="form1" method="post" action="Final.php">
 
 <table width="700">
<tr>
   <td colspan="5" align="center" style="height:20px;background-color:#06F;color:#FFF;">Products in the Shopping Cart </td>
</tr><tr rowspan = "2">
               <tr>
                 <td><strong>Name</strong></td>
                 <td><input type="text" name="name"></td>
               </tr>
            <tr>
                 <td width="67"><strong>Surname</strong></td>
                 <td width="144"><input type="text" name="surname"></td>
               </tr>
			       <tr>
                 <td width="67"><strong>Identitty Number</strong></td>
                 <td width="144"><input type="text" name="IDno"></td>
               </tr>
             <tr>
                 <td><strong>E-mail address </strong></td>
                 <td><input type="text" name="email"></td>
               </tr>
                <tr>
                 <td><strong>Telephone</strong></td>
                 <td><input type="text" name="telephone"></td>
               </tr>
             <tr>
                 <td><strong>Shipping Address</strong></td>
                 <td><textarea name="address" cols="35" rows="4"></textarea></td>
               </tr>
             <tr>
                 <td><strong>Credit Card Information:</strong></td>
               <td><select name="card">
                   <option value="Absa">Absa</option>
                   <option value="Standard Bank">Standard Bank</option>
                   <option value="Capitec">Capitec</option>
                   <option value="FNB">FNB</option>
				     <option value="Nedbank">Nedbank</option>
					   <option value="Others">Others</option>
                </select>
                 <br>
 <input name="radiobutton" type="radio" value="cheque">
Cheque
 <input name="radiobutton" type="radio" value="saving">
Saving
</td>
               </tr>
                 <tr>
                 <td><strong><br>
Account Number</strong></td>
                 <td><input typr ="text" name="accountno"></td>
               </tr>
           <tr>
                 <td>&nbsp;</td>
                 <td><input type="submit" name="Submit" value="Send Your Order" onclick = "Final.php"> </td>
               </tr>
      </table>			

</body>
</html>