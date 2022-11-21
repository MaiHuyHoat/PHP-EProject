<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
    <?php
    require("Views_admin/head.php");
    ?>
  </head>

  <body>
    <!-- navigation bar -->
    <?php
      require("Views_admin/header.php");
    ?>
    <!-- navigation bar -->
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="add_process.php" method="get" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input
                      id="title"
                      name="title"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea
                      name="description"
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select name="category"
                      class="custom-select tm-select-accounts"
                      id="category">
                      <option selected>Select category</option>
                      <option value="shirt">Shirt</option>
                      <option value="polo">Polo</option>
                      <option value="shoes">Shoes</option>
                      <option value="shorts">Shorts</option>
                      <option value="jeans">Jeans</option>
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="gender">Gender</label><br>
                    <div style="padding-left:40px;color:white">
                      <input type="radio" name="gender" class="form-check-input" value="woman">Woman
                      <span style="padding-left:50px"><input type="radio" name="gender" class="form-check-input" value="man">Man</span>
                    </div>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price"
                            >Price
                          </label>
                          <input
                            id="price"
                            name="price"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price_old"
                            >Old Price
                          </label>
                          <input
                            id="price_old"
                            name="price_old"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="created_at"
                            >Created Date
                          </label>
                          <input
                            id="created_at"
                            name="created_at"
                            type="date"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="updated_at"
                            >Updated Date
                          </label>
                          <input
                            id="updated_at"
                            name="updated_at"
                            type="date"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
</div>
                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="closed"
                            >Closed
                          </label>
                          <input
                            id="closed"
                            name="closed"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="bought"
                            >Bought
                          </label>
                          <input
                            id="bought"
                            name="bought"
                            type="text"
                            class="form-control validate"
                          />
                        </div>
                    <div class="custom-file mt-3 mb-3" style="color:white">
                      <label>Link Image</label>
                      <input id="image_1" type="text" name="image_1" class="form-control validate">
                      <br>
                      <input id="image_2" type="text" name="image_2" class="form-control validate">
                      <br>
                      <input id="image_3" type="text" name="image_3" class="form-control validate">
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
        require("Views_admin/footer.php");
    ?>
    <!-- Footer -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
