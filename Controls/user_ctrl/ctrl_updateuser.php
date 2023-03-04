<?php
session_start();
require_once("../../Models/clsUser.php");
$clsUser= new clsUser();
$imageUser=$_FILES["imageUser"];
$imageNameConvert= $clsUser->convertToMd5($imageUser);// ten day du cua anh sau khi da con vert sang dịnh dang md5;
$fullName=$_REQUEST["fullName"];
$address=$_REQUEST["address"];
$phoneNumber=$_REQUEST["phoneNumber"];
$email=$_REQUEST["email"];

$password=$_REQUEST["password"];
$id=$_SESSION["user"]["id"];// lay id tu bien sesssion;
if(isset($imageUser) && $imageUser["error"]==0){// upload file ảnh sang thư mục Upload/images.
    $kq = move_uploaded_file($imageUser["tmp_name"],"../../Upload/imagesUser/$imageNameConvert");
 }
 else{
     echo "Lỗi upload ảnh vào serrver";
 }
$ketqua=$clsUser->updateUser($id, $password, $fullName, $email, $phoneNumber, $address, $imageNameConvert);

if($ketqua==true){
 
    $olderUrl="http://localhost:8080/Noraute/my-account.php" ;
 header("Location:$olderUrl?UpdAcountSuccess=1");
}
else{
    $olderUrl="http://localhost:8080/Noraute/my-account.php" ;
    header("Location:$olderUrl?UpdAcountSuccess=-1");
}
?>