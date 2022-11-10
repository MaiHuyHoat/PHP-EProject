<?php
session_start();
unset($_SESSION["logined"]);
$oldUrl=$_SERVER["HTTP_REFERER"];

header("Location: $oldUrl");
?>