<?php
require_once("clsDatabase.php");

class clsUser
{
    public $clsDatabase = null;
    public $id=0;
    public $user_name;
    public $password;
    public $fullname;
    public $email;
    public $phone_number;
    public $address;
    public $image;
    public $point;
    public $created_at;
    public $updated_at;
    public $deleted;
    function clsUser()
    {
        //ket noi den csdl;
    }
    function checkUser($userName)
    { // hàm kiểm tra tài khoản đã tồn tại trong hệ thống hay chưa.
        $this->clsDatabase = new clsDatabase();
        $sqlCheck = "SELECT * FROM `user` WHERE user_name='$userName';";
        $ketqua = $this->clsDatabase->executeQuery($sqlCheck);
        if ($ketqua == false) {
            echo "Lỗi truy vấn  SQL";
        } else {
            $results =  $this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
            if (count($results) > 0) return true; // Đã tồn tại tài khoản trong hệ thống
            else return false; // Không tồn tại tài khoản trong hệ thống
        }
    }
    function checkAccount($userName,$userPassword){// ham kiem tra dang nhap
   
        $sql="SELECT id FROM `user` WHERE user_name='$userName' AND user.password='$userPassword'";
        $this->clsDatabase= new clsDatabase();
        $this->clsDatabase->executeQuery($sql);
       $rows=$this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_BOTH);
       if(empty($rows)){
        $_SESSION["account"]["login"]=false;
      
        return false;
       }
       else{
       
    
        return true;
       }
    }
    function convertToMd5($file)
    { // chuyen doi ten files sang dinh dang md5
        $imageUser = $file;
        $md5Image = md5($imageUser["name"]); // chuyển tên ảnh sang md5;
        $arrImage = explode(".", $imageUser["name"]); // lấy đuôi, định dạng ảnh
        $typeImage = array_pop($arrImage);
        $imageNameConvert = $md5Image . "." . $typeImage; // ten day du cua anh sau khi da con vert sang dịnh dang md5;
        return $imageNameConvert;
    }
    function getUserId($userName)
    { // Lấy id tài khoản của người dùng
 
        $sql = "SELECT id FROM `user` WHERE user_name='$userName';";
$this->clsDatabase= new clsDatabase();
        $this->clsDatabase->executeQuery($sql);
        $id = $this->clsDatabase->pdo_stm->fetch(PDO::FETCH_BOTH);
        return $id[0];
    }
    function getUserInfo($id)
    {
          
        $this->clsDatabase= new clsDatabase();
        $sql = "SELECT * FROM `user` WHERE id=$id;";

        $kq = $this->clsDatabase->executeQuery($sql);
        if ($kq == false) echo "Lỗi truy vấn SQL";
        else {
            $row = $this->clsDatabase->pdo_stm->fetch(PDO::FETCH_ASSOC);
            // lay thong tin lay duoc va gan cho thong tin cua doi tuong
            $this->id = $row["id"];
            $this->user_name = $row["user_name"];
            $this->password = $row["password"];
            $this->fullname = $row["fullname"];
            $this->email = $row["email"];
            $this->phone_number = $row["phone_number"];
            $this->address = $row["address"];
            $this->image = $row["image"];
            $this->point = $row["point"];
            $this->created_at = $row["created_at"];
            $this->updated_at = $row["updated_at"];
            $this->deleted = $row["deleted"];
        }
    }
    function addUser($userName, $password, $fullName, $email, $phoneNumber, $address, $imageNameConvert)
    {
        $sql = "INSERT INTO `user` (`id`, `user_name`, `password`, `fullname`, `email`, `phone_number`, `address`, `image`, `point`, `created_at`, `updated_at`, `deleted`)
           VALUES (NULL,?,?,?,?,?, ?, ?, '0', current_timestamp(), NULL, '0');";

        $data = [$userName, $password, $fullName, $email, $phoneNumber, $address, $imageNameConvert];
        
        $cslDatabase = new clsDatabase();
        
        $ketqua = $cslDatabase->executeQuery($sql, $data);
        return $ketqua;
    }
    function updateUser($id, $password, $fullName, $email, $phoneNumber, $address, $imageNameConvert)
    {

        $sql = "UPDATE `user` SET  `password` = ?, `fullname` = ?, `email` = ?, `phone_number` = ?, `address` = ?,
        `image` = ? WHERE `user`.`id` = $id;";
     
        $data = [ $password, $fullName, $email, $phoneNumber, $address, $imageNameConvert];
        $cslDatabase = new clsDatabase();
        $ketqua = $cslDatabase->executeQuery($sql, $data);
        return $ketqua;
    }
}
