<?php
require_once("Models/clsSanpham.php");

$title = "";
$description = "";
$price = "";
$price_old = "";
$created_at = "";
$updated_at = "";
$closed = "";
$bought = "";

if(isset($_REQUEST["title"])) {$title = $_REQUEST["title"];}
if(isset($_REQUEST["description"])) {$description = $_REQUEST["description"];}
if(isset($_REQUEST["price"])) {$price = $_REQUEST["price"];}
if(isset($_REQUEST["price_old"])) {$price_old = $_REQUEST["price_old"];}
if(isset($_REQUEST["created_at"])) {$created_at = $_REQUEST["created_at"];}
if(isset($_REQUEST["updated_at"])) {$updated_at = $_REQUEST["updated_at"];}
if(isset($_REQUEST["closed"])) {$closed = $_REQUEST["closed"];}
if(isset($_REQUEST["bought"])) {$bought = $_REQUEST["bought"];}

$category = "";
$gender = "";
if(isset($_REQUEST["category"])) {$category = $_REQUEST["category"];}
if(isset($_REQUEST["gender"])) {$gender = $_REQUEST["gender"];}

$category_id = "";
if($gender == "woman" && $category == "shirt")
    {$category_id=1;}
else if($gender == "woman" && $category == "polo")
    {$category_id=2;}
else if($gender == "woman" && $category == "shoes")
    {$category_id=3;}
else if($gender == "woman" && $category == "shorts")
    {$category_id=4;}
else if($gender == "woman" && $category == "jeans")
    {$category_id=5;}
else if($gender == "man" && $category == "shirt")
    {$category_id=6;}
else if($gender == "man" && $category == "polo")
    {$category_id=7;}
else if($gender == "man" && $category == "shoes")
    {$category_id=8;}
else if($gender == "man" && $category == "shorts")
    {$category_id=9;}
else if($gender == "man" && $category == "jeans")
    {$category_id=10;}
else
{
    return null;
    echo "There is false in this area";
}

$image_1 = "";
if(isset($_REQUEST["image_1"])) {$image_1 = $_REQUEST["image_1"];}
$image_2 = "";
if(isset($_REQUEST["image_2"])) {$image_2 = $_REQUEST["image_2"];}
$image_3 = "";
if(isset($_REQUEST["image_3"])) {$image_3 = $_REQUEST["image_3"];}

$sanpham = new clsSanpham();
$ketqua = $sanpham->addProduct($category_id,$title,$price_old,$price,$description,$closed,$bought,$created_at,$updated_at);
if($ketqua==FALSE)
{
    die("<h3>FAILURE TO ADD DATA</h3>");
}
else
{
    $product = new clsSanpham();
    $result = $product->addImage($image_1,$image_2,$image_3);
    if($result == FALSE)
        die("<h3>NEAR FAILURE TO ADD DATA</h3>");
    else
    {
        echo "<h3>SUCCESS TO ADD DATA</h3>";
        header("Location:http://localhost:8080/Noraute/admin_page/products.php?login=true");
    }
}
?>