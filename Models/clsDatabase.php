<?php
class clsDatabase
{
	public $conn = NULL;
	public $pdo_stm = NULL;
	function Connecting()
	{
		try
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=project2","root","");
			$this->conn->query("SET NAMES UTF8");
		}
		catch(PDOException $ex)
		{
			echo "<h3>" . $ex->getMessage() . "</h3>";
			die("<h3> LỖI KẾT NỐI CSDL </h3>");
		}
		return $this->conn;
	}
	function ThucthiSQL($sql, $data=NULL)
	{
		$this->conn->Connecting();
		$this->pdo_stm = $this->conn->prepare($sql);
		$ketqua=false;
		if($data!=NULL)
			$ketqua = $this->pdo_stm->execute($data);
		else
			$ketqua = $this->pdo_stm->execute();
		return $ketqua;
	}
}
?>