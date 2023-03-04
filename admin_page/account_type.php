<?php
require_once("Models/clsLogin.php");
$account_type = "";
if(isset($_REQUEST["account_type"]))
    $account_type = $_REQUEST["account_type"];

if($account_type == "admin")
{
?>
                <thead>
                  <tr>
                    <th scope="col">FULL NAME</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $user = new clsLogin();
                  $rows = $user->getListAccount_admin();
                  if($rows == NULL)
                    die("<p>ERROR IN DATABASE</p>");
                  foreach($rows as $row)
                  {
                  ?>
                  <tr>
                    <td class="tm-product-name"><?=$row["full_name"]?></td>
                    <td><?=$row["user_name"]?></td>
                    <td><?=$row["password"]?></td>
                    <td>
                      <a href="fix_account.php?account_type=admin&id=<?=$row["id"]?>" class="tm-product-delete-link">
                        <i class="fas fa-wrench tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a onclick="return confirm('DO YOU WANR TO DELETE ADMIN ACCOUNT?')" href="delete_acc_process.php?account_type=admin&id=<?=$row["id"]?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
<?php
}
else if($account_type == "customer")
{
?>
                <thead>
                  <tr>
                    <th scope="col">FULL NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $user = new clsLogin();
                  $rows = $user->getListAccount_user();
                  if($rows == NULL)
                    die("<p>ERROR IN DATABASE</p>");
                  foreach($rows as $row)
                  {
                  ?>
                  <tr>
                    <td class="tm-product-name"><?=$row["fullname"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["phone_number"]?></td>
                    <td><?=$row["address"]?></td>
                    <td><?=$row["user_name"]?></td>
                    <td><?=$row["password"]?></td>
                    <td>
                      <a onclick="return confirm('DO YOU WANR TO DELETE USER ACCOUNT?')" href="delete_acc_process.php?account_type=customer&id=<?=$row["id"]?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <?php
}
else
{
?>
                <thead>
                  <tr>
                    <th scope="col">FULL NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $user = new clsLogin();
                  $rows=array();
                  $rows=array_merge($user->getListAccount_user());
                  if($rows == NULL)
                    die("<p>ERROR IN DATABASE</p>");
                  foreach($rows as $row)
                  {
                  ?>
                  <tr>
                    <td class="tm-product-name"><?=$row["fullname"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["phone_number"]?></td>
                    <td><?=$row["address"]?></td>
                    <td><?=$row["user_name"]?></td>
                    <td><?=$row["password"]?></td>
                    <td>
                      <a onclick="return confirm('DO YOU WANR TO DELETE USER ACCOUNT?')" href="delete_acc_process.php?account_type=customer&id=<?=$row["id"]?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
<?php
}
?>

