<?php
// checking logged in or not
session_start();
if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order | Click to Eat</title>
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7443d26057.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <?php require('./header.php') ?>
    <?php require('./connection.php');
    $foodId = $_GET["id"];
    $food = "SELECT id,description,foodname,price,img_src,cat_id FROM food WHERE id='$foodId'";
    $result = $conn->query($food);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['foodId'] = $row['id'];
            $foodname = $row['foodname'];
            $price = $row['price'];
            $description = $row["description"];
            $cat_id = $row["cat_id"];
            $img_src = $row["img_src"];
        }
    } else {
        echo "<p class='alert-danger p-2'>Order failed!. </p>";
    }
    ?>
    <br>
    <br><br>
    <main class="mt-5">
        <div class="container">
            <h2 class="my-2">Place Your order</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <img src="images/illustration/payment.svg" alt="">
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="card mb-3 w-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/food/<?php echo $cat_id . "/" . $img_src; ?>.webp" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title"> <?php echo $foodname; ?></h3>
                                    <p class="card-text"> <?php echo  $description; ?></p>
                                    <p> <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <span>4.5</span>
                                    </p>
                                    <h5>Price: <?php echo $price; ?> BDT</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="row g-3" action="processOrder.php" method="POST">
                        <div class="col-md-6">
                            <label for="cname" class="form-label">
                                <h5>Customer name</h5>
                            </label>
                            <input name="cname" type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">
                                <h5>Phone</h5>
                            </label>
                            <input name="phone" type="phone" class="form-control" id="phone">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">
                                <h5>Address</h5>
                            </label>
                            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-8">
                            <label for="inputCity" class="form-label">
                                <h5>City</h5>
                            </label>
                            <input name="city" type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">
                                <h5>Zip</h5>
                            </label>
                            <input name="zip" type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-md-12">
                            <label for="patOpt" class="form-label">
                                <h5>Payment option</h5>
                            </label>
                            <select name="patOpt" class="form-control">
                                <option value="cod">Cash on Delivery</option>
                                <option value="bkash">Bkash</option>
                                <option value="card">Card Payment</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <br><br><br>
    <?php require('./footer.php') ?>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>