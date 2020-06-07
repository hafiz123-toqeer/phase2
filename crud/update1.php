<?php 

    require_once("connections.php");
    $productId = $_GET['GetID'];
    $query = " select * from stu4 where ID='".$ID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_array($result))
    {
        $productId= $row['ID'];
        $productName= $row['Name'];
        $productPrice= $row['Price'];
        $productCode= $row['Code'];
        $productInStock= $row['InStock'];
        $productDiscount= $row['Discont'];
        $productSizes= $row['Size'];
        $productDetails= $row['Detail'];

        
        $folder= $row['Picture'];
        echo "$folder";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

</head>
<body class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="view.php=<?php echo $ID ?>" method="post" enctype="multipart/form-data">
							
                                <input type="numeric" class="form-control mb-2" placeholder=" ID " name="ID" value="<?php echo $ID ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Name " name="Name" value="<?php echo $Name ?>">
                                <input type="numeric" class="form-control mb-2" placeholder=" Price " name="Price" value="<?php echo $Price ?>">
                                <input type="numeric" class="form-control mb-2" placeholder=" Code " name="Code" value="<?php echo $Code ?>">
                                <input type="numeric" class="form-control mb-2" placeholder=" InStock " name="InStock" value="<?php echo $InStock ?>">
                                <input type="numeric" class="form-control mb-2" placeholder=" Discount " name="Discount" value="<?php echo $Discount ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Size " name="Sizes" value="<?php echo $Sizes ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Detail " name="Details" value="<?php echo $Details ?>">
                                <input type="file" class="form-control mb-2" id="file" name=" Picture"  value="<?php echo $folder ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>