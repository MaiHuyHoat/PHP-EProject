
<nav class="navbar navbar-expand-xl" id="header_section">
    <div class="container h-100">
        <a class="navbar-brand" href="index.php">
            <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
         
       
            if($_SESSION['loginedAdmin'] == true)
            {
            ?>
            <ul class="navbar-nav mx-auto h-100">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?login=true">
                        <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="orders.php?login=true">
                        <i class="far fa-file-alt"></i>
                            Orders
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="products.php?login=true">
                        <i class="fas fa-shopping-cart"></i>
                            Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="accounts.php?login=true">
                        <i class="far fa-user"></i>
                            Accounts
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="feedbacks.php?login=true">
                        <i class="far fa-user"></i>
                            Feedbacks
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link d-block" href="Controllers/ctrl_logout.php">
                        <b>Logout</b>
                    </a>
                </li>
            </ul>

            <?php
            }else if($_SESSION['loginedAdmin']==false){
           
           
            ?>
            <ul class="navbar-nav mx-auto h-100">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">
                        <i class="far fa-file-alt"></i>
                            Orders
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="products.php">
                        <i class="fas fa-shopping-cart"></i>
                            Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="accounts.php">
                        <i class="far fa-user"></i>
                            Accounts
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="feedbacks.php">
                        <i class="far fa-user"></i>
                            Feedbacks
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link d-block" href="login.php">
                        <b>Login</b>
                    </a>
                </li>
            </ul>
            <?php
         }
            ?>
        </div>
    </div>
</nav>