<?php
require_once("clsDatabase.php");

class clsOrder{
    public $clsDatabase=null;
    public $id;
    public $user_id;
   
    public $fullname;
    public $email;
    public $phone_number;
    public $address;
    public $note;
    public $status;//0 la moi; 1 là đã duyệt; 2 tạm huỷ; 3 đã thanh toán
    function clsOrder(){
         $clsDatabase= new clsDatabase();      
    }
    function getLastId(){
        $clsDatabase= new clsDatabase();
        $sql="SELECT MAX(id) FROM `order`;";
         $clsDatabase->executeQuery($sql);
        $row=$clsDatabase->pdo_stm->fetch();
        $id=$row[0];
        
        return $id;
    }
    function addOrder($user_id, $fullname,$email,$phone_number,$address,$note,$status){
        $clsDatabase= new clsDatabase(); 
        $sql="INSERT INTO `order` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `note`, `order_date`, `status`) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?, CURRENT_TIME(), ?);";
         $data=[$user_id, $fullname,$email,$phone_number,$address,$note,$status];
        $kq= $clsDatabase->executeQuery($sql,$data);
        if($kq==true){ // neu thanh cong thi gan cac gia tri do cho doi tuong clsOrder de de dang truy xuat;
            $this->id=$this->getLastId();
            $this->user_id=$user_id;
            $this->fullname=$fullname;
            $this->email=$email;
            $this->phone_number=$phone_number;
            $this->address=$address;
            $this->note=$note;
            $this->status=$status;
        }
          return $kq;
    }
    function getOrder($user_id){// them dieu kien data
     $clsDatabase= new clsDatabase();
     $sql="SELECT * FROM `order` WHERE user_id=$user_id";
    $clsDatabase->executeQuery($sql);
     $rows=$clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
     return $rows;

    }

}
?>