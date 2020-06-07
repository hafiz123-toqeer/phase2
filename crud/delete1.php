<?php
session_start();
include "connections.php";

$id = $_GET['Del'];

$query = "DELETE FROM 'stu4' WHERE 0
$query_result = mysqli_query($conn, $query);

if($query_result) {
	$_SESSION['delete_result'] = true;
	header("location:read.php");
}
else {
	echo "some error occured while deleting the file...";
}
?>
	