<?php
require_once("clsDatabase.php");
 class clsOrderDetail{
  public $clsDatabase=null;
  public $id;
  public $order_id;
  public $product_id;
  public $size;//1 la S ;2 la M; 3 la L
  public $price;
  public $total_money;
   function clsOrderDetail(){
    $this->clsDatabase= new clsDatabase();
   }
   function addOrderDetail($order_id,$product_id,$size,$price,$num,$total_money){
    $clsDatabase= new clsDatabase(); 
    $sql="INSERT INTO `orderdetail` (`id`, `order_id`, `product_id`, `size`, `price`, `num`, `total_money`) 
    VALUES (NULL, ?, ?, ?, ?, ?, ?);";
     $data=[$order_id,$product_id,$size,$price,$num,$total_money];
     $kq= $clsDatabase->executeQuery($sql,$data);
     return $kq;
   }
 }
?>