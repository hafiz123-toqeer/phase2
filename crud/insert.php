 <?php
								    session_start();
									
									$id = $_POST['ID'];
									$name = $_POST['Name'];
									$price = $_POST['Price'];
									$code = $_POST['Code'];
									$stock = $_POST['Stock'];
									$discount = $_POST['Discount'];
									$size = $_POST['Size'];
									$details = $_POST['Details'];
									$image = $_POST['Image'];
								
									
									include("connections.php");
									
									$query = "INSERT INTO' `stu4`(`ID`, `Name`, `Price`, `Code`, `Instock`, `Discount`, `Sizes`, `Details`, `Picture`, `Operations`) VALUES (`$ID`, `$Name`, `$Price`, `$Code`, `$InStock`, `$Discount`, `$Sizes`, `$Details`, `$Picture`, `$Operations`)";
									
									$query_result = mysqli_query($conn, $query);
                                    if(!$query_result) {
	                                {
		                            die("Database query failed: " . mysqli_connect_error());
	                                }
									mysqli_close();
									
									if($query_result) {
                                    $_SESSION['insert_result'] = true;
									header("location:view.php");
									}
									else {
									echo "the query is not executed successfully";
									}
									?>