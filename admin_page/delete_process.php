<?php
require_once("Models/clsSanpham.php");
$id = "";
if(isset($_REQUEST["id"]))
{
    $id = $_REQUEST["id"];
    if($id!="" && is_numeric($id))
    {
        $sanpham = new clsSanpham();
        $result =$sanpham -> deleteProduct($id);
        if($result == FALSE)
            die("<h3>FAILURE TO DELETE DATA</h3>");
        else
        {
            echo "<h3>SUCCESS TO DELETE DATA</h3>";
            header("Location:http://localhost:8080/Noraute/admin_page/products.php?login=true");
        }
    }
    else
    {
        echo "<h3>ERROR IN GETTING ID</h3>";
    }
}
?>