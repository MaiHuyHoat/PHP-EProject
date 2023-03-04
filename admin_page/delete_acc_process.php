<?php
require_once("Models/clsLogin.php");

$account_type = "";
if(isset($_REQUEST["account_type"]))
    $account_type = $_REQUEST["account_type"];

$id = "";
if(isset($_REQUEST["id"]))
{
    $id = $_REQUEST["id"];
    if($id!= "" && is_numeric($id))
    {
        if($account_type == "admin")
        {
            $account = new clsLogin();
            $result = $account -> deleteAccount_admin($id);
            if($result == FALSE)
                die("<h3>FAILURE TO DELETE ADMIN DATA</h3>");
            else
            {
                echo "<h3>SUCCESS TO DELETE DATA</h3>";
                $link = "accounts.php";
                echo "<a href=".$link.">RETURN TO ACCOUNTS</a>";
            }
        }else if($account_type == "customer")
        {
            $account = new clsLogin();
            $result = $account -> deleteAccount_user($id);
            if($result == FALSE)
                die("<h3>FAILURE TO DELETE USER DATA</h3>");
            else
            {
                echo "<h3>SUCCESS TO DELETE DATA</h3>";
                header("Location:http://localhost:8080/Noraute/admin_page/accounts.php?login=true");
            }
        }
    }
    else
    {
        echo "<h3>ERROR IN GETTING ID</h3>";
    }
}
?>