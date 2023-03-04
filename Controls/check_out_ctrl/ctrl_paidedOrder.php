<?php
require_once("../../Models/clsOrder.php");
require_once("../../Models/clsOrderDetail.php");
require_once("../../Models/clsSanpham.php");
$clsOrder= new clsOrder();
$clsOderDetail= new clsOrderDetail();
$clsSanpham= new clsSanpham();
$order_id=$_REQUEST["order_Id"] ;


$orderDetails= $clsOderDetail->getOrderDetail($order_id);
foreach ($orderDetails as $key => $value) {
    $clsSanpham->updateCloseProduct($value["product_id"],$value["num"]);
    $clsSanpham->updateBoughtProduct($value["product_id"],$value["num"]);

}
$kq=$clsOrder->updateStatusOrder($order_id,4);
if($kq==true){
    $olderUrl="http://localhost:8080/Noraute/my-account.php";
header("Location:$olderUrl?UpdAcountSuccess=1");
}
else {
    $olderUrl="http://localhost:8080/Noraute/my-account.php";
    header("Location:$olderUrl?UpdAcountSuccess=-1");
}
?>