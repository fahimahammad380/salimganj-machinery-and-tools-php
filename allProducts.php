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
    <section class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Salimgonj Machinery & Tools</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br><br>
        <nav class="navbar ">
            <div class="container-fluid">
                <h5>All products</h5>
                <form class="d-flex">
                    <a class="btn btn-primary" href="sell.php" role="button" data-bs-toggle="tooltip" title="Proceed with the selected items">Proceed</a>
                </form>
            </div>
        </nav>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Price</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><a class="" href="productDetails.php" data-bs-toggle="tooltip" title="See details of this product.">1</a></th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>
    <br><br><br>
    <?php require('./footer.php') ?>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>