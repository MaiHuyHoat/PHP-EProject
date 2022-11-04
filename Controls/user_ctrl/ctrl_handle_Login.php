<?php
session_start();
require("../../Models/clsDatabase.php");
$userEmail=$_REQUEST["userName"];
$userPassword=$_REQUEST["userPassword"];
function getUserId($userName){// Lấy id tài khoản của người dùng
   $clsDatabase= new clsDatabase();
   $sql="SELECT id FROM `user` WHERE user_name='$userName';";
   $clsDatabase->executeQuery($sql);
  $id=$clsDatabase->pdo_stm->fetch();
  return $id[0];
}
function checkAccount($userName,$userPassword){
    $clsDatabase= new clsDatabase();
    $sql="SELECT id FROM `user` WHERE user_name='$userName' AND user.password='$userPassword'";
    $clsDatabase->executeQuery($sql);
   $rows=$clsDatabase->pdo_stm->fetchAll();
   if(empty($rows)){
    $_SESSION["account"]["login"]=false;
    return 0;
   }
   else{
    $_SESSION["account"]["login"]=true;
    return 1;
   }
}
echo checkAccount($userEmail,$userPassword);
?>