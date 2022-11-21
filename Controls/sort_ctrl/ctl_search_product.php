<?php
require_once("Models/clsSanpham.php");
$key = "";
if(isset($_REQUEST["search"]))
{
    $key = $_REQUEST["search"];
    $sanpham = new clsSanpham();
    $rows = $sanpham -> getListProduct("AND title LIKE '%$key%'");
}
?>