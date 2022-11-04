<?php
session_start();
$id=$_REQUEST["product"];
echo $idDel;
if(isset($_REQUEST["product"])==false|| $id==null || $id==""){
    echo " id sản phẩm không hợp lệ";

}
else {
    unset($_SESSION["cart"][$id]);
}
$olderUrl=$_SERVER['HTTP_REFERER'] ;
header("Location:$olderUrl");
?>