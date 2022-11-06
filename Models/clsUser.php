<?php
require_once("clsDatabase.php");

class clsUser
{
    public $clsDatabase = null;
    public $id;
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
        $this->clsDatabase = new clsDatabase(); //ket noi den csdl;
    }
    function getUserId($userName)
    { // Lấy id tài khoản của người dùng
        $clsDatabase = new clsDatabase();
        $sql = "SELECT id FROM `user` WHERE user_name='$userName';";
        $clsDatabase->executeQuery($sql);
        $id = $clsDatabase->pdo_stm->fetch();
        $this->id = $id[0]; //lay gia tri id va gan cho id cua clsUser;
        return $id[0];
    }
    function getUserInfo($id)
    {
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
        $cslDatabase= new clsDatabase();
        $ketqua=$cslDatabase->executeQuery($sql,$data);
        return $ketqua;
    }
    function updateUser($id,$userName, $password, $fullName, $email, $phoneNumber, $address, $imageNameConvert){
       $sql="UPDATE `user` SET `user_name` = 'quynh', `password` = '1111', `fullname` = 'Phạm Thị Diễm Quỳnh', `email` = 'quynh@gmail.com', `phone_number` = '234242', `address` = 'nhat ban',
        `image` = 'https://img.docbao.vn/images/uploads/2022/11/03/giai-tri/phim-hoa.png' WHERE `user`.`id` = 3;"
    }
}
