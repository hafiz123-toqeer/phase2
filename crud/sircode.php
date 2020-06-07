<html>
  <title> PHP TUTORIAL  </title >
<body>
 <?php 
    $uid = $_GET['upd'];
	$server = "localhost";
	$user= "root";
	$paswrd ="";
	$dbname ="student2";
	$dbcon = mysqli_connect($server, $user, $paswrd, $dbname);
	 $qur = "select * from std where id='$uid'";
	  $rw = mysqli_query($dbcon,$qur );
	  $resl = mysqli_fetch_assoc($rw);
	
 ?>
  <form method="POST">
  Id: <input type="text" name="id" value="<?php echo $resl['id']; ?>  "><br>
   Name: <input type="text" name="first" value="<?php echo $resl['name']; ?> " ><br>
    Email: <input type="text" name="email" value ="<?php echo $resl['email']; ?> " ><br>
  <input type ="submit" name="submit">

 </form>
 <?php 
 
   $dee = $_GET['dell'];
  
  if(isset($_POST['submit'])){
	  
	   $id = $_POST['id'];
        $name = $_POST['first'];
		 $email = $_POST['email'];
  }
         echo "".$name."<br>";
		 echo $name;
  
    $server = "localhost";
	$user= "root";
	$paswrd ="";
	$dbname ="student2";
       $dbcon = mysqli_connect($server, $user, $paswrd, $dbname);
  
if($dbcon){
	echo"database is connected";
}
	else{
		echo"database is not connected";
	}
	$query = "insert into std values('1' , 'ahmed' , 'ahmed@gmail.com')";
	$result = mysqli_query($dbcon, $query);
	if($result){
		echo"record inserted successfully";
	}
	else{
		echo"record not inserted";
	}
	$del = "delete from std where id '2'";
	$de = mysqli_query(dbcon, $del);
	
	if($de){
	echo"row deleted succesfully";
	}
	else{
		echo"row cot deleted succesfully";
	
	$inser = "select *from std";
	
	$res = mysqli_query($dbcon, $inser);<td><a href="Web2.php?dell=<?php echo $sel['id']; ?>">Delete</a>
	
	$row = mysqli_num_rows($res);
	
	echo $row;
	
	while($sel = mysqli_fetch_assoc($res))

?>
<table border="1">
<tr><td><?php echo $sel['id']; ?></td>
    <td><?php echo $sel['name']; ?></td>
	<td><?php echo $sel['email']; ?></td>
	<td><a href="Web2.php?dell=<?php echo $sel['id']; ?>">Delete</a></td></tr>
<?php } ?>
</body>
</html>