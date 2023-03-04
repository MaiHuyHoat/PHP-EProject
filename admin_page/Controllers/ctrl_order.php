<?php
require_once("../../Models/clsOrder.php");
require_once("../../Models/clsOrderDetail.php");
require_once("../../Models/clsSanpham.php");
require_once("email_ctrl/ctrl_email.php");
$clsOrder= new clsOrder();
$clsOderDetail= new clsOrderDetail();
$clsSanpham= new clsSanpham();
$order_id=$_REQUEST["order_id"] ;
$numStatus=$_REQUEST["status_order"];

$kq=$clsOrder->updateStatusOrder($order_id,$numStatus);

if($kq==true){
    $olderUrl=$_SERVER["HTTP_REFERER"];
header("Location:$olderUrl");
}
else {
    $olderUrl=$_SERVER["HTTP_REFERER"];
    header("Location:$olderUrl?ERROR=1");
}
?>