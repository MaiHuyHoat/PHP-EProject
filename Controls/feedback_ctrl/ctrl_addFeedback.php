<?php
require_once("../../Models/clsFeedback.php");
$user_id=$_REQUEST["user_id"];
$product_id=$_REQUEST["product_id"];
$fullname=$_REQUEST["fullname"];
$email=$_REQUEST["email"];
$phone_number=$_REQUEST["phone_number"];
 $subject_name=isset($_REQUEST["subject_name"])?$_REQUEST["subject_name"]:"Comment from $fullname";
  $note=$_REQUEST["note"];
$clsFeedback= new clsFeedback();
$kq=$clsFeedback->addFeedback($user_id,$product_id,$fullname,$email,$phone_number,$subject_name,$note);
echo json_encode($clsFeedback->getFeedback($product_id));
?>