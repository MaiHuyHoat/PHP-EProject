<?php
require_once('../Models/clsDatabase.php');
class clsFeedback
{
    public $clsDatabase= null;
    function clsFeedback()
    {

       $this->clsDatabase= new clsDatabase();
          
    }

    function getListFeedback($bonus_data=null)// mảng điều kiện để lấy danh sách sản phẩm
    {
     
        $sql = "SELECT id,user_id,fullname,email,phone_number,subject_name,note
                FROM feedback ";
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
            return $rows;
        }  
    }
}
?>