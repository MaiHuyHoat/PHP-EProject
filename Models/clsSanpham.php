<?php
        require_once("clsDatabase.php");
class clsSanpham{
 
    public $clsDatabase= null;
    function clsSanpham(){

       $this->clsDatabase= new clsDatabase();
          
    }
    function getImageById($id){
        
        $sql="SELECT thumbnail from galery WHERE galery.product_id=?";
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
    function getListProduct($bonus_data=null)// mảng điều kiện để lấy danh sách sản phẩm
    {
     
        $sql = "SELECT product.id,product.category_id,product.title,product.price_old,product.price,product.description,galery.thumbnail
                FROM product INNER JOIN galery WHERE galery.product_id=product.id";
        if(empty($bonus_data)==false)
        {
            $sql.=" ".$bonus_data;
        }
        $ketqua =$this->clsDatabase->executeQuery($sql);
        if($ketqua==FALSE)
            return NULL;
        else
        {
            $rows =$this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_ASSOC);
           
            for($i=0;$i<count($rows);$i++) {
             
                 $rows[$i]["thumbnail"]=$this->getImageById($rows[$i]["id"]);
            }
            $ids=[];
            $arrLength=count($rows);
          for ($i=0; $i < $arrLength; $i++) { 
            if(in_array($rows[$i]["id"],$ids))unset($rows[$i]);
            else{
                $ids[]=$rows[$i]["id"];
            }
          }
         return $rows;
            
        }
        
    }
}

?>