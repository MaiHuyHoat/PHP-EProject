<?php
session_start();
$_SESSION["logined"]=false;// xoa bien logined
$oldUrl=$_SERVER["HTTP_REFERER"];

header("Location: $oldUrl");
?>