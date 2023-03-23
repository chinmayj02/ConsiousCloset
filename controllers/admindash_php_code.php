<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'greencloset');

	// initialize variables
	$rank = "";
    $approval = "";

    if (isset($_POST['update'])) {
        $product_id = $_POST['product_id'];
        $category_id = $_POST['category_id'];
		$product_name = $_POST['product_name'];
    
        mysqli_query($db, "UPDATE products SET product_name='$product_name' WHERE product_id=$product_id");
        $_SESSION['message'] = "product Info updated!"; 
        header('location: products.php');
    }