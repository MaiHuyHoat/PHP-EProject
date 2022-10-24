<?php
        require_once("clsDatabase.php");
class clsSanpham{
 
    public $clsDatabase= null;
    function clsSanpham(){

       $this->clsDatabase= new clsDatabase();
          
    }
    function getImageById($id){
        
    }
    function getListProduct()
    {
       
        $conn =$this->clsDatabase-> ConnectDB();
        $this->clsDatabase= new clsDatabase();
        if($conn==NULL)
            return NULL;
        $sql = "SELECT product.id,product.category_id,product.title,product.price,product.description,galery.thumbnail
                FROM product INNER JOIN galery WHERE galery.product_id=product.id";
        
        $ketqua =$this->clsDatabase->executeQuery($sql);
        if($ketqua==FALSE)
            return NULL;
        else
        {
            $rows =$this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
    }
}

?>