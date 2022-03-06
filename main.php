<?php
require('./connection.php');
$foods = "SELECT id,description,foodname,price,img_src FROM food";
$fastFood = $conn->query($foods . " WHERE cat_id='20'");
$totalProducts = 50;
?>



<section id="dashboard" class="container">
    <h3 class="text-center fw-bold my-3 p-2">Dashboard</h3>
    <section class=" d-flex justify-content-center">
        <div class="card text-white bg-primary shadow-sm" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Count of all products</h5>
                <p class="card-text">Products: <?php echo $totalProducts; ?></p>
            </div>
            <a class="text-white card-header text-center" href="allProducts.php" data-bs-toggle="tooltip" title="Sell all products">Sell all</a>
        </div>
        </div>
        <div class="card text-white bg-warning mx-3 shadow-sm" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Products almost out of stock</h5>
                <p class="card-text">Products: </p>
            </div>
            <div class="card-header text-center"><ins>See all</ins></div>
        </div>
        <div class="card text-white bg-danger shadow-sm" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Products out of stock</h5>
                <p class="card-text">Products: </p>
            </div>
            <div class="card-header text-center"><ins>See all</ins></div>
        </div>
    </section>
    <br><br>
    <section class="d-flex text-white">
        <div class="col-6 bg-info card me-3 p-3">
            <h5 class="text-center my-3 ">Top sales items</h5>
            <table class="table table-sm p-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-center"><ins>See all</ins></div>
        </div>
        <div class="col-6 bg-info card p-3">
            <h5 class="text-center my-3">Top sales items</h5>
            <table class="table table-sm ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Price</th>
                    </tr>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center"><ins>See all</ins></div>
        </div>
    </section>
    <br><br>
    <section class=" d-flex justify-content-center">
        <div class="card text-white bg-info" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Net profit: </h5>
            </div>
        </div>
        <div class="card text-white bg-info mx-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Revenue: </h5>
            </div>
        </div>
        <div class="card text-white bg-info" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Total sales: </h5>
            </div>
        </div>
        <div class="card text-white bg-info ms-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Capital: </h5>
            </div>
        </div>
    </section>
</section>



<main class="mb-5">


    <!-- subscribe our newsletter -->
    <section class="m-5">
        <div class="container text-center section-bg rounded-3">
            <div class="w-100 p-3">
                <i class="h1 fas fa-envelope-open p-2"></i>
                <h1 class="fw-bold text-danger">GET 20% OFF</h1>
                <h5 class="fw-bold text-center">
                    Subscribe to your newsletter and receive a coupon
                </h5>
                <div class="w-50 mx-auto">
                    <input class="form-control" type="text" name="" id="" placeholder="Enter your email" />
                </div>
                <button class="btn btn-primary mt-2">Subscribe</button>
            </div>
        </div>
    </section>

</main>