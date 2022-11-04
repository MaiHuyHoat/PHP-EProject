<?php
//left
require_once("Models/clsSanpham.php");
$gender= "";
$category = "";
if(isset($_REQUEST["gender"]))
    $gender = $_REQUEST["gender"];
if(isset($_REQUEST["category"]))
    $category = $_REQUEST["category"];
if($gender == "man" && $category == "shirt")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=6");
}
else if($gender == "man" && $category == "polo")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=7");
}
else if($gender == "man" && $category == "shoes")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=8");
}
else if($gender == "man" && $category == "shorts")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=9");
}
else if($gender == "man" && $category == "jeans")
{
    $sanpham = new clsSanpham();
    $rows = $sanpham->getListProduct("AND category_id=10");
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
?>