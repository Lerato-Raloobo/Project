<?php
 session_start();
 $_SESSION['Shopping'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Shopping</title>
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
 <?php
 
//Connecting to the database
$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());

	$order = $_SESSION['Shopping'];
	if ($order) {
		$items = explode(',',$order);
		$contents = array();
		foreach ($items as $item) {
		$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		
		

?>

<table width="700">
<tr>
   <td colspan="5" align="center" style="height:20px;background-color:#06F;color:#FFFFFF;">Products in the Shopping Cart </td>
</tr><tr rowspan = "3">
<b><td style="height:20px;background-color:#FFFFFF;color:#06F;"></td><td style="height:20px;background-color:#FFFFFF;color:#06F;">Product name :</td><td style="height:20px;background-color:#FFFFFF;color:#06F;">Price :</td><td style="height:20px;background-color:#FFFFFF;color:#06F;">Quantity :</td><td style="height:20px;background-color:#FFFFFF;color:#06F;">subtotal :</td>
</b></tr>
<p>

<?php
foreach ($contents as $pro_id =>$pro_qty) 
{


	$sql = "SELECT *FROM products WHERE pro_id = ".$pro_id;
	
	$results = mysql_query($sql);
		
	if(!$results){
	
	die("query submission failed");

}

echo '<form action="Shopping.php?action=update method="get" id="cart">';
 echo "<input name='returnpage' value ='Process.php' type='hidden' />";
    echo "<input name='action' value ='update' type='hidden' />";
	
$records = mysql_num_rows($results);

for($i = 0; $i < $records; $i++)
{	
$new_image = mysql_fetch_array($results);
	
	$pro_price= $new_image ['pro_price'];
	
		echo '<td><a href="Shopping.php?action=delete&returnpage=Process.php&Prod_Id='.$pro_id.'" class="r">Remove orders</a></td>';
			echo  '<b><td>'.$new_image ['pro_name'].'</td></b>';
			echo  '<td>R'.$pro_price.'</td>';
			
			echo  '<td><input type="text" name="qty'.$pro_id.'" value="'.$pro_qty.'" size="3" maxlength="3" /></td>';
			
			echo  '<td>R'.($pro_price * $pro_qty).'</td>';
			$total += $pro_price * $pro_qty;
			echo '</tr>';
		}
		}

		echo  '</table>';
		echo  '<p>Subtotal: <strong>R'.$total.'</strong></p>';
	echo      ' <p>VAT 14%: <strong>R'.($total*0.14).'</strong></p>';
		echo  '<p>Subtotal including 14% VAT : <strong>R'.(($total*0.14)+$total).'</strong></p>';
		echo  '<p>Subtotal including Shipping Costs of R 170.00: <strong>R'.((($total*0.14)+$total) + 170).'</strong></p>';
		?>
  <input name="Updatecart" value ="Update cart" type="submit">
</p>
<p>  <a href="Details.php" title="">Details</a>
  <?php
	
		echo  '</form>';
		
			


	} else {
	
		echo '<p>Your shopping cart is empty.</p>';
	}



				 
				?>	
  
  </div>
      </div>
</p>

	</body>
</html>