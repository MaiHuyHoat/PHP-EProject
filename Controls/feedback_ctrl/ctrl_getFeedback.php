<?php
require_once("../../Models/clsFeedback.php");

$product_id=$_REQUEST["product_id"];

$clsFeedback= new clsFeedback();

echo json_encode($clsFeedback->getFeedback($product_id));
?>