<?php
session_start();

if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
$email = $_SESSION['email'];

include('connection.php');

$sql = "SELECT * from orders WHERE email = '$email' ORDER BY order_time";
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
    <?php require('./header.php')
    ?>
    <br><br><br><br>
    <main>
        <section class="container">
            <h2 class="mb-4">Orders</h2>
            <div class="row g-4">
                <?php
                if ($result->num_rows > 0) {
                    foreach ($result as $order) {
                        $foodId = $order['food_id'];
                        $sql2 = "SELECT * from food where id = '$foodId'";
                        $food = $conn->query($sql2);
                        $foodItem = $food->fetch_assoc();
                ?>
                        <div class="col-sm-12">
                            <div class="card p-2">
                                <div class="text-light bg-danger p-2 mb-4 rounded">
                                    <h5>Order #<?php echo $order['order_id'] ?> </h5>
                                    <span>Date: <?php echo $order['order_time'] ?></span>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3">
                                        <img src="images/food/<?php echo $foodItem['cat_id'] . "/" . $foodItem['img_src']; ?>.webp" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <h3 class="card-title"> <?php echo $foodItem['foodname']; ?></h3>
                                            <p class="card-text"> <?php echo  $foodItem['description']; ?></p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="lh-1">Customer Name: <?php echo $order['c_name'] ?> </p>
                                                    <p class="lh-1">Email : <?php echo $order['email'] ?> </p>
                                                    <p class="lh-1">Phone : <?php echo $order['phone'] ?> </p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="lh-1">Address : <?php echo $order['address'] ?> </p>
                                                    <p class="lh-1">City : <?php echo $order['address'] ?> Zip : <?php echo $order['zip'] ?></p>
                                                    <p class="lh-1">Paid by : <?php echo $order['pay_opt'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p> <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="far fa-star text-warning"></i>
                                                        <span>4.5</span>
                                                    </p>
                                                </div>
                                                <div class="col">
                                                    <h5 class="text-danger">Price: <?php echo $foodItem['price'] ?> BDT</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php   }
                } else {
                    echo "<h2 class='alert-danger p-2'>No order Found </h2>";
                }
                ?>
            </div>
        </section>
    </main>

    <br><br><br>
    <?php require('./footer.php') ?>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>