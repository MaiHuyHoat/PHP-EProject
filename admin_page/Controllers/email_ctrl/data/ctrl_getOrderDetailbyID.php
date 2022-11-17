<?php
session_start();
$order_id=$_SESSION["order"]["id"];
require_once("../../../Models/clsOrderDetail.php");
$clsOrderDetail=new clsOrderDetail();
$orderDetail=$clsOrderDetail->getOrderDetail($order_id);
echo json_encode($orderDetail);
?>