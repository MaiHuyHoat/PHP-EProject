<?php
require_once("clsDatabase.php");
class clsOrder{
    public $clsDatabase=null;
    function clsOrder(){
         $clsDatabase= new clsDatabase();      
    }
    function addOrder(){
        $clsDatabase= new clsDatabase(); 
        $sql="INSERT INTO `order` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `note`, `order_date`, `status`) 
        VALUES (NULL, '0', 'Mai HUY hoat', 'hoatdfk2001@gmail.com', '1324342', 'hai quang hai hau nam dinh', 'khong co gi ca', CURRENT_TIME(), NULL);";
    }
}
?>