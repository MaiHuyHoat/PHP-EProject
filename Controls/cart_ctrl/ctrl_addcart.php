<?php
session_start();
$id=$_REQUEST["product"];
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
// $olderUrl=$_SERVER['HTTP_REFERER'] ;
//     header("Location:$olderUrl");
echo json_encode(array_keys($_SESSION["cart"]));

?>