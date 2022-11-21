<?php
session_start();
unset($_SESSION["logined"]);
header("Location:http://localhost:8080/project2/index.php");
?>