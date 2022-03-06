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


    <br>
    <br><br>
    <main class="mt-5">
        <div class="container">
            <h2 class="my-2"></h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <img src="images/illustration/payment.svg" alt="">
                    </div>

                </div>
                <div class="col-sm-8">
                    <form class="row g-3" action="sell.php" method="POST">
                        <div class="col-md-6">
                            <label for="cname" class="form-label">
                                <h5>Customer name</h5>
                            </label>
                            <input name="cname" type="text" class="form-control" id="">
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
                        <div class="col-12">
                            
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Confirm sell</button>
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