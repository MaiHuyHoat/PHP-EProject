<?php
require_once("Models/clsDatabase.php");
class clsSanpham
{
    public $db;
    public $data;
    function clsSanpham()
    {
        $this->db = new clsDatabase();
        $this->data = array();
    }
    function LayDanhSachSanpham($id)
	{
        $sql = "SELECT * FROM product WHERE id=$id";
		$ketqua = $this->db->ThucthiSQL($sql);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll(PDO::FETCH_BOTH);
		return $ketqua;
	}
}
?>