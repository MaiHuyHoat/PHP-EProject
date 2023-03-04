<?php
require_once("Models/clsSanpham.php");
$id = $_REQUEST["id"];

$title = $_REQUEST["title"];
$description = $_REQUEST["description"];
$price = $_REQUEST["price"];
$price_old = $_REQUEST["price_old"];
$created_at = $_REQUEST["created_at"];
$updated_at = $_REQUEST["updated_at"];
$closed = $_REQUEST["closed"];
$bought = $_REQUEST["bought"];

$category = $_REQUEST["category"];
$gender = $_REQUEST["gender"];
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

$sanpham = new clsSanpham();
$ketqua = $sanpham->fixProduct($id,$category_id,$title,$price_old,$price,$description,$closed,$bought,$created_at,$updated_at);
if($ketqua==FALSE)
    die("<h3>FAILURE TO FIX DATA</h3>");
else
{
    echo "<h3>SUCCESS TO FIX DATA</h3>";
    header("Location:http://localhost:8080/Noraute/admin_page/products.php?login=true");
}
?>