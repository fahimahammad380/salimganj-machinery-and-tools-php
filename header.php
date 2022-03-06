<?php session_start(); ?>
<header class="fixed-top bg-white">
    <div id="myNav" class="shadow">
        <!--Nav bar -->
        <nav class="navbar navbar-expand-lg navbar-light p-0 ">

            <div class="container">
                <a class="navbar-brand" href="index.php"><img width="200px" src="./images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="allProducts.php">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php#food">Add Item</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="index.php#cakes-and-bakery">Cakes and Bakery</a>
                        </li> -->
                    </ul>
                    <?php if (isset($_SESSION['fname'])) { ?>
                        <ul class="navbar-nav me-3">
                            <div class="d-flex d-flex align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link active ms-2" href="orders.php">Orders</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link active" href="login.php">
                                        <i class="me-2 far fa-user-circle"></i><span><?php echo $_SESSION["fname"]; ?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active ms-2" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                                </li>
                            </div>
                        </ul>
                    <?php } else { ?>
                        <ul class="navbar-nav me-3">
                            <li class="nav-item"> <a class="nav-link active" href="login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link active" href="signup.php">Sign up</a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>
</header>