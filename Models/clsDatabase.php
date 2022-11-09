<?php
class clsDatabase{
	public $conn=null;
    public $pdo_stm=null;
	function clsDatabase(){

	}
	function ConnectDB()
	{
		$conn = NULL;
		try
		{
			$conn = new PDO("mysql:host=localhost;dbname=project2","root","");
			$conn->query("SET NAMES UTF8");
		}
		catch(PDOException $ex)
		{
			echo "<p>".$ex->getMessage()."</p>";
			die("<h3> ERROR IN CONNECTING DATABASE</h3>");
		}
		return $conn;
	}
	function executeQuery($sql,$data=null){
		
      $conn=$this->ConnectDB();
	  if(isset($data)==false||empty($data)){
		$this->pdo_stm=$conn->prepare($sql);
		$result=$this->pdo_stm->execute();
		return $result;
	  }
	  else{
		$this->pdo_stm=$conn->prepare($sql);
		$result=$this->pdo_stm->execute($data);
		return $result;
	  }
	 
	}
}

?>