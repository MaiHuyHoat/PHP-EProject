<?php
session_start();
require_once("../../Models/clsOrder.php");
require_once("../../Models/clsOrderDetail.php");
require_once("../../Models/clsSanpham.php");

$listId = array_keys($_SESSION["cart"]);
$user_id=isset($_SESSION['user']['id'])==false? 0: $_SESSION['user']['id'];
$fullName=$_REQUEST["fullName"];
$address=$_REQUEST["address"];
$phoneNumber=$_REQUEST["phoneNumber"];
$email=$_REQUEST["email"];
$note=$_REQUEST["note"];
$status=0;
$clsOrder= new clsOrder();
$kq=$clsOrder->addOrder($user_id,$fullName,$email,$phoneNumber,$address,$note,$status);
if($kq==true) {// neu them order thanh cong vao csdl;
   $order_id=$clsOrder->id;
    
}
else {
    die(" Lỗi thêm order vào CSDL");
}
?>