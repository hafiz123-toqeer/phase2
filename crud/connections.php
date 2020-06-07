<?php 
    $conn = mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("some problem occured while connecting to db: " . mysqli_connect_error());
    }
	
	$db_select = mysqli_select_db($conn, "crud");
	if(!$db_select)
	{
		die("Database selection failed: " . mysqli_error($conn));
	}
?>