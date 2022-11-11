<?php
    // Check if user has requested to get detail
    if (isset($_POST["get_data"]))
    {
        // Get the ID of customer user has selected
        $id = $_POST["id"];
 
        // Connecting with database
        $connection = mysqli_connect("localhost", "root", "", "project2");
 
        // Getting specific customer's detail
        $sql = "SELECT product.id,product.category_id,product.title,product.price_old,product.price,product.description,galery.thumbnail
                FROM product INNER JOIN galery WHERE galery.product_id=product.id AND product.id='$id'";
        
        $result = mysqli_query($connection, $sql);
        $product = mysqli_fetch_object($result);
 
        // Important to echo the record in JSON format
        echo json_encode($product);
 
        // Important to stop further executing the script on AJAX by following line
        exit();
    }
?>