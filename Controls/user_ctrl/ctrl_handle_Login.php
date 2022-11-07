<?php
session_start();
require_once("../../Models/clsDatabase.php");
require_once("../../Models/clsUser.php");
$clsUser= new clsUser();
$userName=$_REQUEST["userName"];
$userPassword=$_REQUEST["userPassword"];

if($clsUser->checkAccount($userName,$userPassword)==true){
   $_SESSION["logined"]=true;// dang nhap thanh cong
  $_SESSION["user"]["id"]= $clsUser->getUserId($userName);
  header("Location:http://localhost/Project_T3/");// quay tro lai trang home

}
else{
   $_SESSION["logined"]=false;
    $olderUrl=$_SERVER["HTTP_REFERER"];
    header("Location: $olderUrl?loginFalse=1");
}
?>