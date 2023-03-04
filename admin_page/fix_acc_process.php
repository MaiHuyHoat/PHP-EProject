<?php
require_once("Models/clsLogin.php");

if(isset($_REQUEST["id"]))
{
    $id = $_REQUEST["id"];
}else
    echo "None";

if(isset($_REQUEST["fullname"]) && isset($_REQUEST["email"]) && isset($_REQUEST["acc_name"]) && isset($_REQUEST["password"]) && isset($_REQUEST["phone"]) && isset($_REQUEST["address"]) && isset($_REQUEST["created_at"]) && isset($_REQUEST["updated_at"]) && isset($_REQUEST["image_link"])) 
{
    $fullname = $_REQUEST["fullname"];
    $email = $_REQUEST["email"];
    $acc_name = $_REQUEST["acc_name"];
    $password = $_REQUEST["password"];
    $phone = $_REQUEST["phone"];
    $address = $_REQUEST["address"];
    $created_at = $_REQUEST["created_at"];
    $updated_at = $_REQUEST["updated_at"];
    $image_link = $_REQUEST["image_link"];

    $account = new clsLogin();
    $ketqua = $account->fixAccount_user($id,$acc_name,$password,$fullname,$email,$phone,$address,$image_link,$created_at,$updated_at);
    if($ketqua==FALSE)
        die("<h3>FAILURE TO ADD USER DATA</h3>");
    else
    {
        echo "<h3>SUCCESS TO ADD DATA</h3>";
        $link = "accounts.php";
        echo "<a href=".$link.">RETURN TO ACCOUNTS</a>";
    }
}
else if(isset($_REQUEST["fullname"]) && isset($_REQUEST["acc_name"]) && isset($_REQUEST["password"]) && isset($_REQUEST["image_link"]))
{
    $fullname = $_REQUEST["fullname"];
    $acc_name = $_REQUEST["acc_name"];
    $password = $_REQUEST["password"];
    $image_link = $_REQUEST["image_link"];

    $account = new clsLogin();
    $ketqua = $account->fixAccount_admin($id,$acc_name,$password,$fullname,$image_link);
    if($ketqua==FALSE)
        die("<h3>FAILURE TO ADD ADMIN DATA</h3>");
    else
    {
        echo "<h3>SUCCESS TO ADD DATA</h3>";
        header("Location:http://localhost:8080/Noraute/admin_page/accounts.php?login=true");
    }
}
?>