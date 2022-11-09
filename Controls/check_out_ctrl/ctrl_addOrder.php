<?php
session_start();
$listId = array_keys($_SESSION["cart"]);
$fullName=$_REQUEST["fullName"];
$address=$_REQUEST["address"];
$phoneNumber=$_REQUEST["phoneNumber"];
$email=$_REQUEST["email"];
$note=$_REQUEST["note"];

?>