<?php 

    require_once("connections.php");

    if(isset($_POST['update 1']))
    {
        $productId= $_POST['ID'];
        $productName= $_POST['Name'];
        $productPrice= $_POST['Price'];
        $productCode= $_POST['Code'];
        $productInStock= $_POST['InStock'];
        $productDiscount= $_POST['Discount'];
        $productSizes= $_POST['Sizes'];
        $productDetails= $_POST['Details'];

      $filename= $_FILES["Picture"]["Name"];

        $tempname= $_FILES["Picture"]["tmp_Name"];

        $folder="images/".$filename;

        move_uploaded_file($tempname, $folder);

		 $query = "UPDATE `stu4` SET `ID`= '$ID',`Name`= '$Name',`Price`= '$Price',`Code`= '$Code', `InStock`= '$InStock', `Discount`= '$Discount',`Sizes`= '$Size', `Details`= '$Details', `Picture`= '$Picture',`Operations`= '$Operations', WHERE 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            header("location:update1.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>