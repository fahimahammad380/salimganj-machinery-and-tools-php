<?php
session_start();

if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
$email = $_SESSION['email'];

include('connection.php');

$sql = "SELECT * from food";
$result = $conn->query($sql); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders | Click to Eat</title>
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7443d26057.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require('./header.php') ?>
    <br><br><br>
    <main>
        <section class="container">
            <h2 class="mb-4">Product details</h2>
            <div class="row g-4">
                <div class="col-sm-12">
                    <div class="card p-2">
                        <div class="text-white bg-info p-2 mb-4 rounded">
                            <h5>Product Name</h5>
                            <span data-bs-toggle="tooltip" title="Purchase date.">Date: </span>
                        </div>
                        <div class="row ">
                            <div class="col-md-3">
                                <img src="./images/food/10/Chicken biriayani.webp" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h3 class="card-title"> </h3>
                                    <p class="card-text"> </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="lh-1">Product Name: </p>
                                            <p class="lh-1">Brand : </p>
                                            <p class="lh-1">In stock : piece(s)</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="lh-1">Purchase price : BDT</p>
                                            <p class="lh-1">Costing : BDT </p>
                                        </div>
                                    </div>

                                    <h5 class="text-info">Selling Price: BDT</h5>
                                    <a class="btn btn-primary" href="sell.php" role="button" >Sell Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <br><br><br>
    <?php require('./footer.php') ?>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>