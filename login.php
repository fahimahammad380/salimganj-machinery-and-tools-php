<?php
session_start();
if (isset($_SESSION['fname'])) {
    header("Location: index.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Click to Eat</title>
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
    <!-- bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/7443d26057.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="mynavbar-bg shadow">
        <!--Nav bar -->
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img width="230px" src="./images/logo.svg" alt=""></a>
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link p-0" href="signup.php">
                            <div class="d-flex d-flex align-items-center">
                                <i class="me-3 far fa-user-circle"></i><span>Sign up</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <br>
        <section>
            <!-- Login  -->
            <?php
            if ($_POST) {
                include('connection.php');
                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "SELECT * from users where email = '$email' and password = '$password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        // echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";
                        // Set session variables
                        $_SESSION["email"] = $email;
                        $_SESSION["fname"] = $row["fname"];
                        header("Location: index.php");
                        exit();
                    }
                } else {
                    echo "<p class='alert-danger p-2'>Login failed! email or password was wrong. </p>";
                }
            }
            ?>
            <h1 class="text-sm-center text-md-center text-lg-start">
                Login to your account
            </h1>
            <form action="login.php" method="POST">
                <div class="row d-flex align-items-center justify-content-between my-3">
                    <div class="col-sm-12 col-lg-5 col-md-6 ">
                        <img class="w-lg-75 w-sm-100" src="images/illustration/login.svg" alt="">
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="my-3">
                            <label for="email" class="form-label">
                                <h5>Email address</h5>
                            </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" require>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <h5>Password</h5>
                            </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" require>
                        </div>
                        <button class="btn btn-primary w-100 my-3">
                            <h5 class="pt-1">Login</h5>
                        </button>
                        <!-- <p>By click signup you agree to our <span class="text-primary">terms and conditions</span>. Suggest you to read term and conditions before signup. </p> -->
                    </div>
                </div>
            </form>
        </section>
    </div>
    <br><br>
    <?php require('./footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>