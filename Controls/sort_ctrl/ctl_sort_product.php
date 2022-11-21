<?php
//left
require_once("Models/clsSanpham.php");
$gender= "";
$category = "";
$first_price="";
$last_price="";

if(isset($_REQUEST["gender"]))
    $gender = $_REQUEST["gender"];
if(isset($_REQUEST["category"]))
    $category = $_REQUEST["category"];
if(isset($_REQUEST["first_price"]))
{
    $first_price = $_REQUEST["first_price"];
}
else
{
    $first_price = 0;
}
if(isset($_REQUEST["last_price"]))
{
    $last_price = $_REQUEST["last_price"];
}
else
{
    $last_price = 150;
}

//gender_sort
//woman_sort
if($gender == "woman" && $category == "shirt")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=1 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "woman" && $category == "polo")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=2 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "woman" && $category == "shoes")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=3 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "woman" && $category == "shorts")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=4 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "woman" && $category == "jeans")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=5 AND product.price BETWEEN $first_price AND $last_price");
}
//man_sort
else if($gender == "man" && $category == "shirt")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=6 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "man" && $category == "polo")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=7 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "man" && $category == "shoes")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=8 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "man" && $category == "shorts")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=9 AND product.price BETWEEN $first_price AND $last_price");
}
else if($gender == "man" && $category == "jeans")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=10 AND product.price BETWEEN $first_price AND $last_price");
}
else
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct();
}

//up
$drop_sort="";
if(isset($_REQUEST["drop_sort"]))
    $drop_sort = $_REQUEST["drop_sort"];
if($drop_sort == "Default sorting")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct();
}
else if($drop_sort == "Sort by alphabet")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("ORDER BY title ASC");
}
else if($drop_sort == "Sort by price: low to high")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("ORDER BY price ASC");
}
else if($drop_sort == "Sort by price: high to low")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("ORDER BY price DESC");
}
else
{
    return null;
}