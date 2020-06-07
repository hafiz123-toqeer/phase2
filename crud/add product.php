<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
	<title>Add Product</title>
</head>
<body style="background-color:lightblue;">
<header <div style="background-color:#F1F1F1;">
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
font-size:30px;
margin:10px auto 18px auto;
}

ul li {
	width:250px;
}

ul li a {
	text-decoration:none;
	text-align:center;
}

.container {
  width: 400px;
  margin: 20px auto;
}

form {
  padding: 10px;
  background:#00cc44;
  color: Black;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  text-align:center;
}

input[type="text"] {
    width: 300px;
	line-height:20px;
}

input[type="numeric"] {
    width: 300px;
	line-height:20px;
}

input[type="boolean"] {
    width: 300px;
	line-height:20px;
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
</header><br>
<div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                        </div>
                        <div class="card-body">
        <form action="view.php" method="POST" enctype="multipart/form-data"> 
		<h1> Products Details </h1>
        <input type="numeric" name="ID" placeholder="ID*"><br><br>
        <input type="text" name="Name" placeholder="Name*"><br><br>
        <input type="numeric" name="Price" placeholder="Price*"><br><br>
        <input type="text" name="Code" placeholder="Code*"><br><br>
        <input type="text" name="InStock" placeholder="Stock*"><br><br>
        <input type="boolean" name="Discount" placeholder="Discount*"><br><br>
        <input type="text" name="Sizes" placeholder="Size*"><br><br>
        <input type="text" name="Details" placeholder="Details*"><br><br>
        <input type="file"  id="file" name="uploadfile"><br><br>
        <input type="submit" name="submit"><br><br>
    </form>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<footer id="footer div">
<a href="https://coursesweb.net/" title="CoursesWeb" id="cwb" style="background-color:#F1F1F1;">CoursesWebEngineering.net</a>
</footer>
</body>
</html>