<?php
require_once("clsDatabase.php");

class clsFeedback{
    public $clsDatabase= null;
  public $id;
  public $user_id;
  public $product_id;
  public $fullname;
  public $email;
  public $phone_number;
  public $subject_name;
  public $note;
  function clsFeedback(){
    $clsDatabase= new clsDatabase();
  }
  function addFeedback($user_id,$product_id,$fullname,$email,$phone_number,$subject_name=null,$note){
    $clsDatabase= new clsDatabase();
    $sql="INSERT INTO `feedback` (`id`, `user_id`, `product_id`, `fullname`, `email`, `phone_number`, `subject_name`, `note`) VALUES (NULL, '$user_id', '$product_id', '$fullname',
     '$email', '$phone_number', '$subject_name', '$note');";
    $kq= $clsDatabase->executeQuery($sql);
    return $kq;
  }
  function getFeedback($product_id){
    $sql="SELECT feedback.*, user.fullname,user.image FROM 
    `feedback` INNER JOIN user WHERE feedback.user_id=user.id AND 
    product_id=$product_id ORDER BY feedback.id DESC";
    $clsDatabase= new clsDatabase();
    $clsDatabase->executeQuery($sql);
    $rows= $clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
}
?>