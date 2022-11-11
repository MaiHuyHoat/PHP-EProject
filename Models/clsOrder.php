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
    public $total_money;
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
    function addOrder($user_id, $fullname,$email,$phone_number,$address,$note,$total_money,$status){
        $clsDatabase= new clsDatabase(); 
        $sql="INSERT INTO `order` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `note`,`total_money`, `order_date`, `status`) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?,?, CURRENT_TIME(), ?);";
         $data=[$user_id, $fullname,$email,$phone_number,$address,$note,$total_money,$status];
        $kq= $clsDatabase->executeQuery($sql,$data);
        if($kq==true){ // neu thanh cong thi gan cac gia tri do cho doi tuong clsOrder de de dang truy xuat;
            $this->id=$this->getLastId();
            $this->user_id=$user_id;
            $this->fullname=$fullname;
            $this->email=$email;
            $this->phone_number=$phone_number;
            $this->address=$address;
            $this->note=$note;
            $this->total_mone=$total_money;
            $this->status=$status;
        }
          return $kq;
    }
    function getOrder($user_id){// them dieu kien data
     $clsDatabase= new clsDatabase();
     $sql="SELECT * FROM `order` WHERE user_id=$user_id AND status!=1  ORDER BY order_date DESC;";
    $clsDatabase->executeQuery($sql);
     $rows=$clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
     return $rows;

    }
    function cancelOrder($order_id){
        $clsDatabase= new clsDatabase();
        $sql="UPDATE `order`SET status=1 WHERE id=$order_id ";
        $kq=$clsDatabase->executeQuery($sql);
        return $kq;
    }
    function ReOrder($order_id){
        $clsDatabase= new clsDatabase();
        $sql="UPDATE `order`SET status=0 WHERE id=$order_id ";
        $kq=$clsDatabase->executeQuery($sql);
        return $kq;
    }
    function paidedOrder($order_id){
        $clsDatabase= new clsDatabase();
        $sql="UPDATE `order`SET status=5 WHERE id=$order_id ";
        $kq=$clsDatabase->executeQuery($sql);
        return $kq;
    }
    function getOrderCancel($user_id){
        $clsDatabase= new clsDatabase();
        $sql="SELECT * FROM `order` WHERE user_id=$user_id AND status=1  ORDER BY order_date DESC;";
       $clsDatabase->executeQuery($sql);
        $rows=$clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}
?>