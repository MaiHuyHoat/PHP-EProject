<?php
require_once("../Models/clsDatabase.php");
class clsSanpham{
 
    public $clsDatabase= null;
    function clsSanpham(){

      
          
    }
    function getImageById($id){
        $this->clsDatabase= new clsDatabase();
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
     
        $sql = "SELECT product.id,product.category_id,product.title,product.price_old,product.price,
                product.description,product.closed,product.bought,galery.thumbnail,product.created_at,product.updated_at
                FROM product INNER JOIN galery WHERE galery.product_id=product.id AND deleted=0 ";
        if(empty($bonus_data)==false)
        {
      
             $sql.=$bonus_data;
           
        }
        $this->clsDatabase= new clsDatabase();
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

    function addProduct($category_id,$title,$price_old,$price,$description,$closed,$bought,$created_at,$updated_at)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "INSERT INTO product VALUES (NULL, ?, ?, ?, ?, ?, 0, 0, ?, ?, ?, 0)";
        $data[] = $category_id;
        $data[] = $title;
        $data[] = $price_old;
        $data[] = $price;
        $data[] = $description;
        $data[] = $closed;
        $data[] = $bought;
        $data[] = $created_at;
        $data[] = $updated_at;

        $ketqua = $this->clsDatabase->executeQuery($sql,$data);
        return $ketqua;
    }

    function addImage($image_1,$image_2,$image_3)
    {
        $this->clsDatabase= new clsDatabase();
        $imgs[3] = [$image_1,$image_2,$image_3];
        $sql_product_id = "SELECT Max(id) FROM product";
        $ketqua = $this->clsDatabase->executeQuery($sql_product_id);
        if($ketqua == false)
        {
            echo "False is here";
        }
        else
        {
            $final_ids = $this->clsDatabase->pdo_stm->fetchAll(PDO::FETCH_BOTH);
            echo json_encode($final_ids);
        }
        foreach($final_ids as $final_id)
        {
            //image_1
            $data_1[] = (int)$final_id["Max(id)"];
            $data_1[] = (string)$image_1;
            $sql_thumbnail = "INSERT INTO galery VALUES(NULL,?,?)";
            $result_1 = $this->clsDatabase->executeQuery($sql_thumbnail,$data_1);

            //image_2
            $data_2[] = (int)$final_id["Max(id)"];
            $data_2[] = (string)$image_2;
            $sql_thumbnail = "INSERT INTO galery VALUES(NULL,?,?)";
            $result_2 = $this->clsDatabase->executeQuery($sql_thumbnail,$data_2);

            //image_3
            $data_3[] = (int)$final_id["Max(id)"];
            $data_3[] = (string)$image_3;
            $sql_thumbnail = "INSERT INTO galery VALUES(NULL,?,?)";
            $result_3 = $this->clsDatabase->executeQuery($sql_thumbnail,$data_3);
        }

        if($result_1 == true && $result_2 == true && $result_3 == true)
        {
            echo "Correct";
            return true;
        }
        else
        {
            echo "Next false is now";
            return false;
        }
    }

    function fixProduct($id,$category_id,$title,$price_old,$price,$description,$closed,$bought,$created_at,$updated_at)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "UPDATE product SET category_id=?, title=?, price_old=?, price=?, description=?, closed=?, bought=?, created_at=?, updated_at=? WHERE id=$id";
        $data[] = $category_id;
		$data[] = $title;
		$data[] = $price_old;
        $data[] = $price;
        $data[] = $description;
        $data[] = $closed;
        $data[] = $bought;
        $data[] = $created_at;
        $data[] = $updated_at;

 		$ketqua = $this->clsDatabase->executeQuery($sql,$data);
		return $ketqua;
    }

    function deleteProduct($id)
    {
        $sql = "UPDATE product SET deleted=1 WHERE id=$id";
        $result = $this->clsDatabase->executeQuery($sql);
        if($result==FALSE)
        {
            echo "Nothing can be processed";
        }
        return $result;
    }
}
?>