<?php
require_once("Models/clsLogin.php");
$account_type = "";
$id = "";
if(isset($_REQUEST["id"]))
    $id = $_REQUEST["id"];
if(isset($_REQUEST["account_type"]))
    $account_type = $_REQUEST["account_type"];
if($account_type == "admin")
{
    $account = new clsLogin();
    $rows = $account->getListAccount_admin("AND id=$id");
    foreach($rows as $row)
    {
?>
              <form action="fix_acc_process.php" class="tm-signup-form row">
                <input name="id" type="text" style="display:none" value="<?=$id?>"/>
                <div class="form-group col-lg-6">
                  <label for="fullname">Full Name</label>
                  <input
                    id="fullname"
                    name="fullname"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["full_name"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="acc_name">Account Name</label>
                  <input
                    id="acc_name"
                    name="acc_name"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["user_name"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                    value="<?=$row["password"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="re_password">Re-enter The Password</label>
                  <input
                    id="re_password"
                    name="re_password"
                    type="password"
                    class="form-control validate"
                    value="<?=$row["password"]?>"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label for="image_link">Image Link</label>
                  <input
                    id="image_link"
                    name="image_link"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["image"]?>"
                  />
                </div>
                <div class="col-12">
                <div style="padding-top:20px"></div>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Update Your Account
                  </button>
                </div>
              </form>
<?php
    }
}
else if($account_type == "customer")
{
    $account = new clsLogin();
    $rows = $account->getListAccount_user("AND id=$id");
    foreach($rows as $row)
    {
?>
              <form action="fix_acc_process.php?id=<?=$row["id"]?>" class="tm-signup-form row">
                <input name="id" type="text" style="display:none" value="<?=$id?>"/>
                <div class="form-group col-lg-6">
                  <label for="fullname">Full Name</label>
                  <input
                    id="fullname"
                    name="fullname"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["fullname"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Account Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                    value="<?=$row["email"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="acc_name">Account Name</label>
                  <input
                    id="acc_name"
                    name="acc_name"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["user_name"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                    value="<?=$row["password"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input
                    id="phone"
                    name="phone"
                    type="tel"
                    class="form-control validate"
                    value="<?=$row["phone_number"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="address">Address</label>
                  <input
                    id="address"
                    name="address"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["address"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="created_at">Created Date</label>
                  <input
                    id="created_at"
                    name="created_at"
                    type="datetime-local"
                    class="form-control validate"
                    value="<?=$row["created_at"]?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="updated_at">Updated Date</label>
                  <input
                    id="updated_at"
                    name="updated_at"
                    type="datetime-local"
                    class="form-control validate"
                    value="<?=$row["updated_at"]?>"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label for="image_link">Image Link</label>
                  <input
                    id="image_link"
                    name="image_link"
                    type="text"
                    class="form-control validate"
                    value="<?=$row["image"]?>"
                  />
                </div>
                <div class="col-12">
                <div style="padding-top:20px"></div>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Update Your Account
                  </button>
                </div>
              </form>
<?php
    }
}
?>