<?php
session_start();
$id=$_REQUEST["product"];
if ($id==""||is_numeric($id)==false) {
    die(" id sản phẩm không hợp lệ");
}else{
    if(isset($_SESSION["cart"][$id])==false){
        $_SESSION["cart"][$id]=1;
    }
    else {
        $_SESSION["cart"][$id]+=1;
    }
}

header("location:http://localhost/Project_T3/shop.php");
?>