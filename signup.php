<!-- check user logged in or not -->
<?php
session_start();

if (isset($_SESSION['fname'])) {
    header("Location: index.php");
}
?>

<!-- Login  -->
<?php
$error = false;
if ($_POST) {
    include('connection.php');
    $id = rand(1000, 10000);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (id, fname, lname, email, password)
        VALUES ('$id','$fname', '$lname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $error = false;
        $_SESSION["email"] = $email;
        $_SESSION["fname"] = $fname;
        header("Location: index.php");
        exit();
    } else {
        $error = $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Click to Eat</title>
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
                        <a class="nav-link p-0" href="login.php">
                            <div class="d-flex d-flex align-items-center">
                                <i class="me-3 far fa-user-circle"></i><span>Login</span>
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
            <?php
            if ($error) {
                echo "<p class='p-2 alert-danger'> Email already exists! Please login or enter new email</p>";
            }
            ?>
            <h1 class="text-sm-center text-md-center text-lg-start">
                Create a new account
            </h1>
            <form action="signup.php" method="POST">
                <div class="row d-flex align-items-center justify-content-between my-3">
                    <div class="col-sm-12 col-lg-5 col-md-6 ">
                        <img class="w-lg-75 w-sm-100" src="images/illustration/signup.svg" alt="">
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="my-3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="fname" class="form-label">
                                        <h5>First Name</h5>
                                    </label>
                                    <input name="fname" type="text" class="form-control" id="fname" placeholder="First name" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lname" class="form-label">
                                        <h5>Last Name</h5>
                                    </label>
                                    <input name="lname" type="text" class="form-control" id="lname" placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <h5>Email Address</h5>
                            </label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="my-3">
                            <label for="password" class="form-label">
                                <h5>Password</h5>
                            </label>
                            <input name="password" type="password" class="form-control" id="sPassword" placeholder="Enter password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">
                                <h5>Confirm password</h5>
                            </label>
                            <input name="confirm-password" type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
                        </div>
                        <button id="signup-btn" disabled class="btn btn-primary w-100 my-3">
                            <h5 class="pt-1">Sign up</h5>
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
    <script src="js/script.js"></script>
</body>

</html>