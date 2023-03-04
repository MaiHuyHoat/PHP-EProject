<?php
session_start();
unset($_SESSION["loginedAdmin"]);
header("Location:http://localhost:8080/Noraute/admin_page/login.php")
?>