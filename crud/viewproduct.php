<!DOCTYPE html>
<?php
include_once '../includes/html_head.php';
@require("../requires/connection.php");
?>
<body>
    <?php
      include_once '../includes/top.php';
    ?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addproduct.php">Add Product</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="viewproduct.php">View Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
<?php
    $query = "SELECT * from tblproducts";
    $result = mysqli_query($dbcon, $query);
?>
<div class="container">
    <div class="row">
    <table border = "1">
<tr>
    <th>
        ID
    </th>
    <th>
        NAME
    </th>
    <th>
        PRICE
    </th>
    <th>
        CODE
    </th>
    <th>
        IN STOCK
    </th>
    <th>
        DISCOUNT
    </th>
    <th>
        SIZE
    </th>
    <th>
        DETAIL
    </th>
    <th>
        IMAGE
    </th>
    <th>
        ACTION
    </th>

</tr>

<?php

    while($fetc = mysqli_fetch_assoc($result)){
?>    
<tr>
    <td>
    <?php
        echo $fetc['productid'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productname'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productprice'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productcode'];
    ?>
    </td>
    <td>
    <?php
        if($fetc['productinstock']==1)
            echo "Y";
        else
            echo "N";
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productdiscount'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productsizes'];
    ?>
    </td>
    <td>
    <?php
        echo $fetc['productdetails'];
    ?>
    </td>
    <td>
    <?php
        echo "<img src='../images/".$fetc['productprofile']."' width='100' height='100' >";
    ?>
    </td>
    <td>
        <a href="update.php?uid=<?php echo $fetc['productid']; ?>"> Edit </a>
        <a href="delete.php?deleteid=<?php echo $fetc['productid']; ?>"> Delete </a>    
    </td>
</tr>

<?php
};
?>
    </table>
    </div>
    </div>
<?php
    include_once '../includes/footer.php';
?>
</body>
</html>