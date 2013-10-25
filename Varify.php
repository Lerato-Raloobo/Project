<?php


class Varify
{
	function compareProducts($images)
	{
		//Connecting to the database
		$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
 		 mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());
		
		$query = "select * from products WHERE pro_image = '".$images."'";
	
		$results = mysql_query($query);

		$records = mysql_num_rows($results);

		return $records;
	}
	
	function checkProductExistance($name)
	{  
		//Connecting to the database
		$dbConn = mysql_connect ("localhost","root") or die ('MySQL connect failed. ' . mysql_error());
 		 mysql_select_db("style",$dbConn) or die('Cannot select database. ' . mysql_error());
		
		
		$query = "select * from products WHERE pro_name = '".$name."'";
			
		$results = mysql_query($query);
		
		$records = mysql_num_rows($results);
		
		return $records;
		  
   }
}

?>