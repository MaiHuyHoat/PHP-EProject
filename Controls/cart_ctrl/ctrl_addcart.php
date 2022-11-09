<?php
session_start();
require_once("../../Models/clsSanpham.php");
$id=$_REQUEST["product"];
$clsSanpham= new clsSanpham();
$product= $clsSanpham->getProductById($id);
$price=(float) $product["price"];


if ($id==""||is_numeric($id)==false) {
    die(" id sản phẩm không hợp lệ");
}else{
    if(isset($_SESSION["cart"][$id])==false){
        $_SESSION["cart"][$id]["qty"]=1;
    }
    else {
        $_SESSION["cart"][$id]["qty"]+=1;
    }
}
$_SESSION["cart"][$id]["price"]=$price;
$_SESSION["cart"][$id]["total"]=round(($_SESSION["cart"][$id]["qty"]*$price),3);

$olderUrl=$_SERVER['HTTP_REFERER'] ;
 header("Location:$olderUrl");


?>