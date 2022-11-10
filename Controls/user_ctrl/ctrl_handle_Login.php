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
  $olderUrl=$_SERVER["HTTP_REFERER"];
  if($olderUrl=="http://localhost/Project_T3/login.php" )
  header("Location:http://localhost/Project_T3/index.php");// quay tro lai trang home
  else if($olderUrl=="http://localhost/Project_T3/checkout.php?loginFalse=1"){
   header("Location:http://localhost/Project_T3/checkout.php ");
  }
  else 
  header("Location:$olderUrl");

}
else{
   $_SESSION["logined"]=false;
    $olderUrl=$_SERVER["HTTP_REFERER"];
    header("Location: $olderUrl?loginFalse=1");
}
?>