<?php

Class Connection
{
	function connect()
	{
		//$con=mysqli_connect("148.72.232.182:3306","ramashankar","Saife@123","ph12651172781_ain");
		$con=mysqli_connect("localhost","root","","allindianiyukti");

		return $con;
	}
}