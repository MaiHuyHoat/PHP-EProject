<?php
require_once("../../Models/clsOrder.php");
$clsOrder= new clsOrder();
$order_id= $_REQUEST["order_Id"];
$kq=$clsOrder->updateStatusOrder($older_id,1);
if($kq==true){
    $olderUrl="http://localhost/Project_T3/my-account.php";
header("Location:$olderUrl?UpdAcountSuccess=1");
}
else {
    $olderUrl="http://localhost/Project_T3/my-account.php";
    header("Location:$olderUrl?UpdAcountSuccess=-1");
}
?>