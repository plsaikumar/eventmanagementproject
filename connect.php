<?php

	$con  =  mysqli_connect("localhost","root","") or die("we couldn't connect");
	
	If(mysqli_connect_errno())
	{
		echo "Failed to connect to Mysql:";
		
		mysqli_connect_error();		
		
	}
	  mysqli_select_db($con,"eventmanagement");
?>