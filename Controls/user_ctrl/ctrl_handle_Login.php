<?php
session_start();
require_once("../../Models/clsDatabase.php");
$userName=$_REQUEST["userName"];
$userPassword=$_REQUEST["userPassword"];
function getUserId($userName){// Lấy id tài khoản của người dùng
   $clsDatabase= new clsDatabase();
   $sql="SELECT id FROM `user` WHERE user_name='$userName';";
   $clsDatabase->executeQuery($sql);
  $id=$clsDatabase->pdo_stm->fetch();
  return $id[0];
}
function checkAccount($userName,$userPassword){// ham kiem tra dang nhap
    $clsDatabase= new clsDatabase();
    $sql="SELECT id FROM `user` WHERE user_name='$userName' AND user.password='$userPassword'";
    $clsDatabase->executeQuery($sql);
   $rows=$clsDatabase->pdo_stm->fetchAll();
   if(empty($rows)){
    $_SESSION["account"]["login"]=false;
  
    return false;
   }
   else{
   

    return true;
   }
}
if(checkAccount($userName,$userPassword)==true){
   $_SESSION["logined"]=true;// dang nhap thanh cong
  $_SESSION["user"]["id"]= getUserId($userName);
  header("Location:http://localhost/Project_T3/");// quay tro lai trang home

}
else{
   $_SESSION["logined"]=false;
    $olderUrl=$_SERVER["HTTP_REFERER"];
    header("Location: $olderUrl?loginFalse=1");
}
?>