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
<form name="Form1" method="post" action="Admin.php" enctype="multipart/form-data" id="Form1">

<input name="action" type="hidden" value="addProduct" />

 <table cellspacing="4" cellpadding="0" style="background-color:#F7F9FC;border-style:solid;border-color:#DFE9F5;border-width:1px;color:#387AC8;font-family:Arial;font-size:13px;width:575px;height:92px;">
  <tr>
   <td colspan="2" align="center" style="height:20px;background-color:#DFE9F5;color:#387AC8;">Add Product</td>
</tr>
  <tr><td height="18" colspan="2" id="entryTableHeader"></td>
  </tr>
  

<?php
//This code was done by the help of previous TUT students 

//Adding products

		//Connecting to the database
		$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
 		 mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());

		$query = "select * from products";
		
		$results = mysql_query($query);
		
		$records = mysql_num_rows($results);
?>
<?php
for($i = 0; $i < $records; $i++)
{

 $product = mysql_fetch_array($results);
 ?>
  <option value="<?php echo $product ['pro_id']; ?>"><?php echo $product ['pro_name']; ?></option>
   <?php
echo $product ['pro_name']."</br> ";
}

?>
  <tr> 
   <td align="right" style="height:40px">Product Name</td>
   <td class="content"> <input name="txtName" type="text" class="box" id="txtName" size="50" maxlength="100" style="width:150px;height:18px;background-color:#FFFFFF;border-style:solid;border-color:#DFE9F5;border-width:1px;color:#387AC8;font-family:Arial;font-size:13px;"></td>
  </tr>
  <tr> 
   <td align="right" style="height:40px">Description</td>
   <td class="content"><textarea name="mtxDescription" cols="40" rows="10" class="box" id="mtxDescription" style="background-color:#FFFFFF;border-style:solid;border-color:#DFE9F5;border-width:1px;color:#387AC8;font-family:Arial;font-size:13px;"></textarea></td>
  </tr>
  <tr> 
   <td align="right" style="height:40px">Price</td>
   <td class="content"><input name="txtPrice" type="text" id="txtPrice" size="10" maxlength="7" class="box" style="width:150px;height:18px;background-color:#FFFFFF;border-style:solid;border-color:#DFE9F5;border-width:1px;color:#387AC8;font-family:Arial;font-size:13px;"> </td>
  </tr>
  <tr> 
  <td align="right" style="height:40px">Qty In Stock</td>
   <td class="content"><input name="txtQty" type="text" id="txtQty" size="10" maxlength="10" class="box"style="width:150px;height:18px;background-color:#FFFFFF;border-style:solid;border-color:#DFE9F5;border-width:1px;color:#387AC8;font-family:Arial;font-size:13px;"> </td>
  </tr>
  <tr> 
   <td align="right" style="height:40px">Image</td>
   <td class="content"><input type="hidden" name="MAX_FILE_SIZE">
<input type="file" id="file" name="file"> </td>
  </tr><tr><td colspan="2" align="center">
  <input name="btnAddProduct" type="submit" id="btnAddProduct" value="Add Product">
 
 </td></tr>
  </table>
</form>
<a href="Admin2.php" title="">Delete Products</a>
</body>
</html>