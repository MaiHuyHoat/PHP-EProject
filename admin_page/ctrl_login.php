<?php
session_start();
require_once("Models/clsLogin.php");

$clsAdmin = new clsLogin();
$admin_name = $_REQUEST["admin_name"];
$admin_password = $_REQUEST["admin_password"];

if($clsAdmin->check_account_admin($admin_name,$admin_password)==true)
{
    $_SESSION["loginedAdmin"] = true;//successfully logined
    $older_url = $_SERVER["HTTP_REFERER"];
    if($older_url=="http://localhost:8080/Noraute/admin_page/login.php" || $older_url="http://localhost:8080/Noraute/admin_page/login.php?login=true")
    {
        header("Location:http://localhost:8080/Noraute/admin_page/index.php?login=true");// quay tro lai trang home
    }
}
else
{
    $_SESSION["loginedAdmin"]=false;
    $older_url=$_SERVER["HTTP_REFERER"];
    if($older_url=="http://localhost:8080/Noraute/admin_page/login.php" || $older_url="http://localhost:8080/Noraute/admin_page/login.php?login=false")
    {
        header("Location:http://localhost:8080/Noraute/admin_page/login.php?login=false");// quay tro lai trang home
    }
}
?>