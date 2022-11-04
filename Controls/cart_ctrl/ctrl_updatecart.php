<?php
session_start();
$qty=$_REQUEST["qty"];
if (empty($qty)) {
    # code...
    die("Errro Form");
}
else {
    foreach ($qty as $key => $value) {
        # code...
      $_SESSION["cart"][$key]=$value;
    }
}
$olderUrl=$_SERVER['HTTP_REFERER'] ;
    header("Location:$olderUrl");
?>