<?php
session_start();
$order_id=$_SESSION["order"]["id"];
require_once("../../../Models/clsOrder.php");
$clsOrder = new clsOrder();

$order=$clsOrder->getOrderById($order_id);
echo json_encode($order);
?>