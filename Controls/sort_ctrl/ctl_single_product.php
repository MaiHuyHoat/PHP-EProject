<?php
require_once("Models/clsSanpham.php");
$id = "";
if(isset($_REQUEST["id"]))
    $id = $_REQUEST["id"];
$sanpham = new clsSanpham();
$rows = $sanpham -> getListProduct("AND product.id=$id");
if($rows == NULL)
    die("<p>ERROR IN DATABASE</p>");
?>