<?php
session_start();
$qty=$_REQUEST["qty"];
$size=$_REQUEST["size"];
if (empty($qty)) {// update so luong san pham
    # code...
    die("Error Form");
}
else {
    foreach ($qty as $key => $value) {
        # code...
      $_SESSION["cart"][$key]["qty"]=$value;
    }
}
if (empty($size)) {
    # code...
    die("Error Form");
}
else {
    foreach ($size as $key => $value) {
        # code...
      $_SESSION["cart"][$key]["size"]=$value;
    }
}

$olderUrl=$_SERVER['HTTP_REFERER'] ;
    header("Location:$olderUrl");
?>