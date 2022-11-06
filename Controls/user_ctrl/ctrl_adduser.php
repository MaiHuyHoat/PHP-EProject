<?php
session_start();

require_once("../../Models/clsDatabase.php");
require_once("../../Models/clsUser.php");
$imageUser=$_FILES["imageUser"];
$md5Image=md5($imageUser["name"]); // chuyển tên ảnh sang md5;
$arrImage=explode(".",$imageUser["name"]);// lấy đuôi, định dạng ảnh
$typeImage=array_pop($arrImage);
$imageNameConvert= $md5Image.".".$typeImage;// ten day du cua anh sau khi da con vert sang dịnh dang md5;
$fullName=$_REQUEST["fullName"];
$address=$_REQUEST["address"];
$phoneNumber=$_REQUEST["phoneNumber"];
$email=$_REQUEST["email"];
$userName=$_REQUEST["userName"];
$password=$_REQUEST["password"];
if(isset($imageUser) && $imageUser["error"]==0){// upload file ảnh sang thư mục Upload/images.
   $kq= move_uploaded_file($imageUser["tmp_name"],"../../Upload/imagesUser/$imageNameConvert");
   
}
else{
    echo "Lỗi upload ảnh vào serrver";
}

 function checkUser($userName){// hàm kiểm tra tài khoản đã tồn tại trong hệ thống hay chưa.
    $cslDatabase= new clsDatabase();
    $sqlCheck="SELECT * FROM `user` WHERE user_name='$userName';";
    $ketqua=$cslDatabase->executeQuery($sqlCheck);
    if($ketqua==false){
        echo "Lỗi truy vấn  SQL";
    }
    else{
        $results=$cslDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        if(count($results)>0)return true;// Đã tồn tại tài khoản trong hệ thống
        else return false;// Không tồn tại tài khoản trong hệ thống
    }

 }
if(checkUser($userName)){

    $olderUrl=$_SERVER['HTTP_REFERER'] ;
     header("Location:$olderUrl?ErrorCreAcount=1");
}
else{
    // $cslDatabase= new clsDatabase();
    // $ketqua=$cslDatabase->executeQuery($sql,$data);
    $clsUser= new clsUser();
    $ketqua=$clsUser->addUser($userName,$password,$fullName,$email,$phoneNumber,$address,$imageNameConvert);
    if($ketqua==true){
        $olderUrl=$_SERVER['HTTP_REFERER'] ;
     header("Location:$olderUrl?CreAcountSuccess=1");
    }
    else{
        $olderUrl=$_SERVER['HTTP_REFERER'] ;
        header("Location:$olderUrl?CreAcountSuccess=-1");
    }
}
?>