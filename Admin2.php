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
<?php
//This code was done by the help of previous TUT students 

//Adding products

		//Connecting to the database
		$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
 		 mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());

		require_once 'Varify.php';

		$varify = new varify();
	
		$sql = "select * from products";


		$results = mysql_query($sql);
	
		if(!$results)
		{

		die("query submission failed");

		}
		$records = mysql_num_rows($results);

?>
<form action="Admin2.php" method="get">
<?php

echo "<table border='0' cellspacing='4' cellpadding='0' style='background-color:#F7F9FC;border-style:solid;border-color:#DFE9F5;border-width:1px;color:#387AC8;font-family:Arial;font-size:13px;width:605px;height:92px;'>";
?>

  <tr>
   <td colspan="6" align="center" style="height:20px;background-color:#DFE9F5;color:#387AC8;">Delete Product</td>
</tr>
<?php
echo "<tr><td><b>Check :</b></td><td><b>Name : </b></td><td><b>Description : </b></td><td><b>Price : </b></td><td><b>Quantity : </b></td><td><b>Plicture : </b></td></tr>";

for($i = 0; $i < $records; $i++)
{
echo '<tr>';

	$products = mysql_fetch_array($results);
	echo "<td><input type='checkbox' name='".$products ['pro_id']."'/>";
	echo "</td>";
	echo "<td>";
	echo $products ['pro_name']."<br />"; 
	echo "</td><td>"; 
	echo $products ['pro_desc']."<br />";
	echo "</td><td>"; 
	echo $products ['pro_price']."<br />";
	echo "</td><td>"; 
	echo $products ['pro_qty']."<br />";
	echo "</td>"; 
	$images = $products ['pro_image'];
	?>
	
	 <td align="left"><img src="images/Image/<?php echo $images;?>"height="40" width="50" alt="" /></td>
	 
	<?php


	echo "</tr>";
	
	echo '<tr>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';
	echo '<td>';
	echo "<hr />";
	echo '</td>';

	echo '</tr>';
	

}

?>

<td colspan="6" align="center" style="height:20px;background-color:#DFE9F5;color:#387AC8;"><input name="Delete" type="submit" value="Delete" /></td>


</table>
</form>

<?php
if(isset($_GET['Delete'])){
	
	$sql = "select * from products";
	
	
	$results = mysql_query($sql);
		
	if(!$results){
	
	die("query submission failed");
	
	}
	
	
	$records = mysql_num_rows($results);
	
	for($i = 0; $i < $records; $i++)
	{
	$products = mysql_fetch_array($results);
	$checked = $products ['pro_id'];
	
	if(isset($_GET["$checked"])){
	
	$sql = "Delete from products where pro_id = ".$products ['pro_id'];
	
	
	$results = mysql_query($sql);
		
	if(!$results){
	
	die("query submission failed");
	
	}
	
	
	
	echo "<br /><h4>products sucessfully deleted.</h4>";

}
}
}
?>

</body>
</html>