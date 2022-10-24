<?php
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
?>