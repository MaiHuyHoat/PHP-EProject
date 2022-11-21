<?php
require_once("Models/clsLogin.php");
$account_type = "";
if(isset($_REQUEST["account_type"]))
    $account_type = $_REQUEST["account_type"];
if($account_type == "admin")
{
?>
                <div class="form-group col-lg-6">
                  <label for="fullname">Full Name</label>
                  <input
                    id="fullname"
                    name="fullname"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="acc_name">Account Name</label>
                  <input
                    id="acc_name"
                    name="acc_name"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="re_password">Re-enter The Password</label>
                  <input
                    id="re_password"
                    name="re_password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label for="image_link">Image Link</label>
                  <input
                    id="image_link"
                    name="image_link"
                    type="text"
                    class="form-control validate"
                  />
                </div>
<?php
}
?>