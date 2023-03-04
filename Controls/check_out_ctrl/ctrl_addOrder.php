<?php
session_start();
require_once("../../Models/clsOrder.php");
require_once("../../Models/clsOrderDetail.php");
require_once("../../Models/clsSanpham.php");

$listId = array_keys($_SESSION["cart"]);
$user_id = isset($_SESSION['user']['id']) == false ? 0 : $_SESSION['user']['id'];
$fullName = $_REQUEST["fullName"];
$address = $_REQUEST["address"];
$phoneNumber = $_REQUEST["phoneNumber"];
$email = $_REQUEST["email"];
$note = $_REQUEST["note"];
$status = 0;
$clsOrder = new clsOrder();
$clsOrderDetail = new clsOrderDetail();
$total_money = 0;
$listId = array_keys($_SESSION["cart"]);
$cSp = new clsSanpham();

$strListId = implode(",", $listId); // danh sach id san pham da mua

$dk = " AND product.id in ($strListId)";

$listProduct = $cSp->getListProduct($dk);
foreach ($listProduct as $row) {
    $total_money += $row["price"] * $_SESSION["cart"][$row["id"]]["qty"];
    # code...
}

$kq = $clsOrder->addOrder($user_id, $fullName, $email, $phoneNumber, $address, $note, $total_money, $status);
if ($kq == true) {
    $order_id = $clsOrder->id;
    $_SESSION["order"]["id"] = $order_id;// tạo biến sesssion order id để gửi mail

    foreach ($_SESSION["cart"] as $key => $value) { // key la product_id còn value la gia tri tham chieu den id san pham
        $product_id = $key;

        if ($value["size"] == "S") $size = 1;
        else if ($value["size"] == "M") $size = 2;
        elseif ($value["size"] == "L") $size = 3;
        $price = $value["price"];
        $qty = $value["qty"];
        $total = $value["total"];
        $clsOrderDetail->addOrderDetail($order_id, $product_id, $size, $price, $qty, $total); // thuc hien them tung order detail; co trong gio hang


    }
    $olderUrl = "http://localhost:8080/Noraute/checkout.php";
    header("Location:$olderUrl?SuccessOrder=1");
} else {
    $olderUrl = "http://localhost:8080/Noraute/checkout.php";
    header("Location:$olderUrl?SuccessOrder=-1");
}
