<?php
require_once("../../Models/clsOrder.php");
$clsOrder= new clsOrder();
$order_id= $_REQUEST["order_Id"];
$kq=$clsOrder->reOrder($order_id);
if($kq==true){
    $olderUrl="http://localhost/Project_T3/my-account.php";
header("Location:$olderUrl?UpdAcountSuccess=1");
}
else {
    $olderUrl="http://localhost/Project_T3/my-account.php";
    header("Location:$olderUrl?UpdAcountSuccess=-1");
}
?>