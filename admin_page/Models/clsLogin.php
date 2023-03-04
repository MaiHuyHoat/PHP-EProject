<?php
require_once('../Models/clsDatabase.php');

class clsLogin
{
    public $clsDatabase= null;
    public $full_name_admin;
    function clsLogin()
    {

       $this->clsDatabase= new clsDatabase();
          
    }

    function check_account_admin($admin_name,$admin_password) //hàm kiểm tra đăng nhập
    {
        $clsDb = new clsDatabase();
        $sql_acc = "SELECT id FROM admin WHERE user_name='$admin_name' AND password='$admin_password' ";
        $ketqua = $clsDb->executeQuery($sql_acc);
        if($ketqua == false)
        {
            echo "Error in connecting Databaseeeee";
        } else {
            $rows = $clsDb->pdo_stm->fetchAll();
            if(empty($rows))
            {
                $_SESSION["account"]["login"] = false;
                return false;
            }else{
                return true;
            }
        }
    }

    function getListAccount_user($bonus_data=null)// mảng điều kiện để lấy danh sách sản phẩm
    {
     
        $sql = "SELECT id,user_name,password,fullname,email,phone_number,address,image,point,created_at,updated_at
                FROM user WHERE deleted=0 ";
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

    function getListAccount_admin($bonus_data=null)// mảng điều kiện để lấy danh sách sản phẩm
    {
     
        $sql = "SELECT id,user_name,password,full_name,image
                FROM admin WHERE deleted=0 ";
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

    function addAccount_user($user_name,$password,$fullname,$email,$phone,$address,$image,$created_at,$updated_at)
    {
        $sql = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, 0, ?, ?, 0)";
        $data[] = $user_name;
        $data[] = $password;
        $data[] = $fullname;
        $data[] = $email;
        $data[] = $phone;
        $data[] = $address;
        $data[] = $image;
        $data[] = $created_at;
        $data[] = $updated_at;
        $this->clsDatabase= new clsDatabase();
        $ketqua = $this->clsDatabase->executeQuery($sql,$data);
        return $ketqua;
    }

    function addAccount_admin($fullname,$user_name,$password,$image)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "INSERT INTO admin VALUES (NULL, ?, ?, ?, ?, 0)";
        $data[] = $fullname;
        $data[] = $user_name;
        $data[] = $password;
        $data[] = $image;

        $ketqua = $this->clsDatabase->executeQuery($sql,$data);
        return $ketqua;
    }

    function fixAccount_user($id,$user_name,$password,$fullname,$email,$phone_number,$address,$image,$created_at,$updated_at)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "UPDATE user SET user_name=?, password=?, fullname=?, email=?, phone_number=?, address=?, image=?, created_at=?, updated_at=? WHERE id=$id";
        $data[] = $user_name;
        $data[] = $password;
        $data[] = $fullname;
        $data[] = $email;
        $data[] = $phone_number;
        $data[] = $address;
        $data[] = $image;
        $data[] = $created_at;
        $data[] = $updated_at;

 		$ketqua = $this->clsDatabase->executeQuery($sql,$data);
		return $ketqua;
    }

    function fixAccount_admin($id,$user_name,$password,$full_name,$image)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "UPDATE admin SET user_name=?, password=?, full_name=?, image=? WHERE id=$id";
        $data[] = $user_name;
        $data[] = $password;
        $data[] = $full_name;
        $data[] = $image;

 		$ketqua = $this->clsDatabase->executeQuery($sql,$data);
		return $ketqua;
    }

    function deleteAccount_user($id)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "UPDATE user SET deleted=1 WHERE id=$id";
        $result = $this->clsDatabase->executeQuery($sql);
        if($result==FALSE)
        {
            echo "Nothing can be processed";
        }
        return $result;
    }

    function deleteAccount_admin($id)
    {
        $this->clsDatabase= new clsDatabase();
        $sql = "UPDATE admin SET deleted=1 WHERE id=$id";
        $result = $this->clsDatabase->executeQuery($sql);
        if($result==FALSE)
        {
            echo "Nothing can be processed";
        }
        return $result;
    }
}
?>