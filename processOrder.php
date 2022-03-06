<?php
require('./connection.php');
session_start();
$orderId = rand(500, 10000);
$email = $_SESSION['email'];
$foodId = $_SESSION['foodId'];
$c_name = $_POST['cname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['cname'];
$zip = $_POST['zip'];
$pay_opt = $_POST['patOpt'];
$time = date("Y-m-d H:i:s");

// echo $orderId, $email, $c_name , $phone, $address, $city, $zip, $pay_opt;

$food = "SELECT id,description,foodname,price,img_src,cat_id FROM food WHERE id='$foodId'";
$result = $conn->query($food);

if ($result->num_rows > 0) {
    //   output data of each row
    while ($row = $result->fetch_assoc()) {
        $foodname = $row['foodname'];
        $price = $row['price'];
        $description = $row["description"];
        $cat_id = $row["cat_id"];
        $img_src = $row["img_src"];
    }
} else {
    echo "<p class='alert-danger p-2'>Order failed!. </p>";
}

$sql = "INSERT INTO orders (order_id, email, food_id, c_name, phone, address, city, zip,pay_opt,order_time)
        VALUES ('$orderId','$email', '$foodId', '$c_name', '$phone','$address','$city', '$zip', '$pay_opt', '$time')";

if ($conn->query($sql) === TRUE) {
    $error = false;
} else {
    $error = $conn->error;
}
$conn->close();
?>

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
    <main class="mt-5">
        <div class="container">
            <h2 class="my-2 alert-success"> Order place Successful. Goto <a href="index.php">Home</a> page</h2>
        </div>
        <br><br><br>
        <div class="container">

            <div class="card mb-3 w-75 mx-auto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/food/<?php echo $cat_id . "/" . $img_src; ?>.webp" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="text-success">Order id: <?php echo $orderId ?> </h4>
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
        </div>
    </main>
    <br><br><br>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>