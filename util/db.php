<?php
    // $con = mysqli_connect("localhost","root","","dtb_shop");
    // Check connection
    //if (mysqli_connect_errno()){
    //    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	//	die();
    //}
	
	function db()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		try
		{
			$conn = new PDO("mysql:host=$servername;dbname=dtb_shop", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "connected";
		}
		catch(PDOException $e)
		{
			//echo "failed";
		}
		return $conn;
	}
	

?>

