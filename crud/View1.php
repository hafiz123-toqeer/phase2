<?php
session_start();
include "connections.php";
$query = "SELECT * form 'stu4'";
$query_result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Product</title>
</head>
<body>
<table border="1">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Code</th>
<th>InStock</th>
<th>Discount</th>
<th>Sizes</th>
<th>Details</th>
<th>Picture</th>
<th>Operations</th>
</tr>
</thead>
<tbody>
<?php
while($res = mysqli_fetch_array($query_result))
{
	?>
	<tr>
	<td><?php echo $res['ID']?></td>
	<td><?php echo $res['Name']?></td>
	<td><?php echo $res['Price']?></td>
	<td><?php echo $res['Code']?></td>
	<td><?php echo $res['InStock']?></td>
	<td><?php echo $res['Discount']?></td>
	<td><?php echo $res['Sizes']?></td>
	<td><?php echo $res['Details']?></td>
	<td><?php echo $res['Picture']?></td>
	<td><?php echo $res['Operations']?></td>
	<td><a href="delete.php?d_id=<?php echo $res['id']?>">Delete</a></td>
	<td><a href="update.php?u_id=<?php echo $res['id']?>">Update</a></td>
	</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>
