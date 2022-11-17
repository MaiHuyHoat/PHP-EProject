<?php
require_once("../../../Models/clsOrderDetail.php");
$clsOrderDetail=new clsOrderDetail();
$product_id=$_REQUEST["product_id"];

$nameProduct = $clsOrderDetail->getNameProduct($product_id) ;
echo json_encode($nameProduct);
?>