<?php
require_once("Models/clsSanpham.php");
$act = "";
if(isset($_REQUEST["act"]))
    $act = $_REQUEST["act"];
$sanpham = new clsSanpham();
if($act == "add")
{
    require("Views/add_product.php");
}
else if($act == "add_process")
{
    require("add_process");
}
?>