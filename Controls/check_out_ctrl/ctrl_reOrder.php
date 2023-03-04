<?php
require_once("../../Models/clsOrder.php");
$clsOrder= new clsOrder();
$order_id= $_REQUEST["order_Id"];
$kq=$clsOrder->updateStatusOrder($order_id,0);
if($kq==true){
    $olderUrl="http://localhost:8080/Noraute/my-account.php";
header("Location:$olderUrl?UpdAcountSuccess=1");
}
else {
    $olderUrl="http://localhost:8080/Noraute/my-account.php";
    header("Location:$olderUrl?UpdAcountSuccess=-1");
}
?>