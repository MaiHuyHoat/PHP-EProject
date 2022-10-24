<?php
        require_once("clsDatabase.php");
class clsSanpham{
 
    public $clsDatabase= null;
    function clsSanpham(){

       $this->clsDatabase= new clsDatabase();
          
    }
    function getImageById($id){
        
        $sql="SELECT thumbnail from galery WHERE galery.product_id=?;";
        $data[]=$id;
        $ketqua =$this->clsDatabase->executeQuery($sql,$data);
        if($ketqua==FALSE)
            return NULL;
        else
        {
            $rows =$this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
            $imgs=[];
            foreach ($rows as $row) {
            $imgs[]= $row["thumbnail"];
            }
            return $imgs;
        }
    }
    function getListProduct()
    {
        $sql = "SELECT product.id,product.category_id,product.title,product.price,product.description,galery.thumbnail
                FROM product INNER JOIN galery WHERE galery.product_id=product.id";
        
        $ketqua =$this->clsDatabase->executeQuery($sql);
        if($ketqua==FALSE)
            return NULL;
        else
        {
            $rows =$this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
           
            for($i=0;$i<count($rows);$i++) {
             
                 $rows[$i]["thumbnail"]=$this->getImageById($rows[$i]["id"]);
            }
            return array_unique($rows);
            
        }
    }
}
$sp=new clsSanpham();
$imgs=$sp->getListProduct();
echo json_encode($imgs);


?>