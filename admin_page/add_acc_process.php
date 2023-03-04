<?php
require_once("Models/clsLogin.php");

$fullname = "";
$acc_name = "";
$password = "";
$image_link = "";

if(isset($_REQUEST["fullname"]) && isset($_REQUEST["acc_name"]) && isset($_REQUEST["password"]) && isset($_REQUEST["image_link"]))
{
    $fullname = $_REQUEST["fullname"];
    $acc_name = $_REQUEST["acc_name"];
    $password = $_REQUEST["password"];
    $image_link = $_REQUEST["image_link"];

    $account = new clsLogin();
    $ketqua = $account->addAccount_admin($fullname,$acc_name,$password,$image_link);
    if($ketqua==FALSE)
        die("<h3>FAILURE TO ADD ADMIN DATA</h3>");
    else
    {
        echo "<h3>SUCCESS TO ADD DATA</h3>";
        header("Location:http://localhost:8080/Noraute/admin_page/accounts.php?login=true");
    }
}
?>