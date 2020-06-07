<?php
session_start();
include "connections.php";
$query = "SELECT * form 'stu4'";
$query_result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body style="background-color:lightblue;">
<header> <div style="background-color:#F1F1F1;">
<div style="background-color:light black; padding: 10px">
			<img src="logoo.jpg" width="60px" height="60px">
			<div style="float:right;padding-right:20px">
				<a href="https://snapchat.com/"><img src="1.jpg" width="30px" height="30px"></a>
				<a href="https://www.instagram.com/"><img src="2.jpg" width="30px" height="30px"></a>
				<a href="https://twitter.com"><img src="3.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="4.png" width="30px" height="30px"></a>
				<a href="https://pk.linkedin.com"><img src="6.png" width="30px" height="30px"></a>
			</div>
		</div>

<style>
li{
  list-style-type:none;
  margin-left:100px; 
  line-height:60px;
    }
	
	body {text-align:left;margin:0 1%; padding:0;}
h1 {
font-size:25px;
margin:10px auto 18px auto;
}

ul li {
	width:250px;
}

ul li a {
	text-decoration:none;
	text-align:center;
}

#footer {
margin:0 auto;
}

#cwb {
display:block;
font-style:oblique;
margin:7% auto 15px auto;
text-align:center;
}



</style>

	<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
   <div class="col-md-6">
  <div class="collapse navbar-collapse" id="navbarNav">
  <div style="background-color:lightgray; width:1450px; margin:0 auto;">
    <ul class="navbar-nav ml-auto">
	<ul style="color:white; display:inline-flex;">
      <li class="nav-item">
        <a class="nav-link" href="home.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add product.php">ADD PRODUCT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view product.php">VIEW PRODUCT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
	</ul>
	</div>
  </div>
  </div>
</nav>
</section>
</header><br><br><br><br><br>

<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered" border="1" style="text-align:center;">
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
                <th>Delete</th>
                <th>Update</th>
                            </tr>
							</body>

                            <?php 
                                    require_once("connections.php");
    $query = " select * from stu4 ";
    $result = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result));
                                    {
                            ?>
                                    <tr>
                                        <td><?php echo $row['ID'];?> </td>
                <td><?php echo $row['Name'];?> </td>
                <td><?php echo $row['Price'];?> </td>
                <td><?php echo $row['Code'];?> </td>
                <td><?php echo $row['InStock'];?> </td>
                <td><?php echo $row['Discount'];?> </td>
                <td><?php echo $row['Size'];?> </td>
                <td><?php echo $row['Detail'];?> </td>
                <td> <img src="<?php echo $row['Picture'];?>" height="120px" width="150px" class="rounded"></td>
                                        <td><a href="delete1.php?Del=<?php echo $row['ID'] ?>">Delete</a></td>
										<td><a href="update1.php?GetID=<?php echo $row['ID'] ?>">Edit</a></td>
                                    </tr>        
                            <?php 
									}	 
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div><br><br><br>
		
		<footer id="footer div">
<a href="https://coursesweb.net/" title="CoursesWeb" id="cwb" style="background-color:#F1F1F1;">CoursesWebEngineering.net</a>
</footer>
		</body>
</html>