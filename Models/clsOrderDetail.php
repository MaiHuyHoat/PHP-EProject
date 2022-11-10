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
   function getOrderDetail($order_id){
    $clsDatabase= new clsDatabase(); 
    $sql="SELECT * FROM `orderdetail` WHERE order_id=$order_id;";
    $clsDatabase->executeQuery($sql);
    $rows=$clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
     return $rows;
   }
   function getNameProduct($product_id){
    $sql="SELECT product.title FROM product INNER JOIN orderdetail WHERE product.id=orderdetail.product_id AND orderdetail.product_id=$product_id;";
    $clsDatabase= new clsDatabase(); 
    $clsDatabase->executeQuery($sql);
    $row=$clsDatabase->pdo_stm->fetch(PDO::FETCH_ASSOC);
    return $row["title"];
   }
 }
?>