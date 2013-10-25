<?php
//This code was downloaded from the internet and modified
 session_start();
 $_SESSION['Shopping'];
 
 $action = $_GET['action'];

	
  switch ($action) {
	case 'add':
		if ($order) {
			$order .= ','.$_GET['item'];
		} else {
			$order = $_GET['item'];
		}

		break;
case 'delete':
		if ($order) {
			$items = explode(',',$order);
			$neworder = '';
			foreach ($items as $item) {
				if ($_GET['pro_id'] != $item) {
					if ($neworder != '') {
						$neworder .= ','.$item;
					} else {
						$neworder = $item;
					}
				}
			}
			$order = $neworder;
		}
		break;
	case 'update':
	if ($order) {
		$neworder = '';
		foreach ($_GET as $key=>$value) {
			if (stristr($key,'pro_qty')) {
				$id = str_replace('pro_qty','',$key);
				$items = ($neworder != '') ? explode(',',$neworder) : explode(',',$order);
				$neworder = '';
				foreach ($items as $item) {
					if ($id != $item) {
						if ($neworder != '') {
							$neworder .= ','.$item;
						} else {
							$neworder = $item;
						}
					}
				}
				for ($i=1;$i<=$value;$i++) {
					if ($neworder != '') {
						$neworder .= ','.$id;
					} else {
						$neworder = $id;
					}
				}
			}
		}
	}
	
	$order = $neworder;
	break;
}

$_SESSION['Shopping'] = $order;

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

	$order = $_SESSION['Shopping'];
	if (!$order) 
	{
		echo'<p>You have no items in your shopping cart</p>';
	} 
	else 
	{
		// Parse the cart session variable
		$items = explode(',',$order);
		$count = (count($items) > 1) ? 'count':'';
		echo '<h4>You have '.count($items).' item'.$count.' in your shopping cart';
	    ?>
		<a href="Process.php">Process Order</a></h4>
		
		<?php
	}
				

//Connecting to the database
$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());
 
$sql = "select * from products where pro_name LIKE '%s%'";


$results = mysql_query($sql);
	
if(!$results){

die("query submission failed");

}
?>

<table height="112" cellpadding="0" cellspacing="4">
<tr>
   <td> Available Products</td>
</tr><tr rowspan = "3">

<?php
$records = mysql_num_rows($results);

for($i = 0; $i < $records; $i++)
{	

$new_image = mysql_fetch_array($results);

	$images = $new_image ['pro_image'];
?>
	<form action="Shopping.php" method="GET">
	<td>
	<img src="images/Image/<?php echo $images;?>"height="230" width="200" alt="" /><br />
		
	<?php
    echo "<input name='item' value ='".$new_image ['pro_id']."' type='hidden' />";
	  echo "<input name='' value ='Products.php' type='hidden' />";
	    echo "<input name='action' value ='add' type='hidden' />";
	
	echo "<b>".$new_image ['pro_name']."        ";
	



	echo "<b>R </b>".$new_image ['pro_price'];
	echo "<br />";

	echo "<input name='add' value ='Add to Cart' type='submit'><br />";
	

	?>
	

   
</td>
</table>
</form>

	
	<?php

	if($i == 2 || $i == 5 || $i == 8 || $i == 11 ||  $i == 14 || $i == 17  )
	{
	   echo "</tr><tr>";
	}
	
	
}



?>


</body>
</html>