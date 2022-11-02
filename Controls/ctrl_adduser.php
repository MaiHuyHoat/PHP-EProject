<?php
session_start();
$imageUser=$_FILES["imageUser"];
$fullName=$_REQUEST["fullName"];
$address=$_REQUEST["address"];
$phoneNumber=$_REQUEST["phoneNumber"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
echo json_encode($imageUser);
echo $fullName;
echo $address;
echo $phoneNumber;
echo $email;
echo $password;
?>