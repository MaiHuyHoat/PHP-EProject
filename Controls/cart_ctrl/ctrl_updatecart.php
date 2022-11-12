<?php
session_start();
require_once("../../Models/clsSanpham.php");
$clsSanpham= new clsSanpham();
$qty=$_REQUEST["qty"];
$size=$_REQUEST["size"];
if (empty($qty)) {// update so luong san pham
    # code...
    die("Error Form");
}
else {
    foreach ($qty as $key => $value) {
        # code...
      $_SESSION["cart"][$key]["qty"]=$value;//$key chinh la id san pham
      $product= $clsSanpham->getProductById($key);// lay thong tin san pham
      $price=(float) $product["price"];// lay gia cua san pham

$_SESSION["cart"][$key]["total"]=round(($_SESSION["cart"][$key]["qty"]*$price),3);
    }
}
if (empty($size)) {
    # code...
    die("Error Form");
}
else {
   
        # code...
        foreach ($size as $key => $value) {
            # code...
          $_SESSION["cart"][$key]["size"]=$value;
        }
    
 

}
 echo json_encode($_SESSION);
$olderUrl=$_SERVER['HTTP_REFERER'] ;
    header("Location:$olderUrl");
?>