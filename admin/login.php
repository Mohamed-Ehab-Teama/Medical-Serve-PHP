<?php
require("../config.php");
require(BL . "functions/validation.php");
?>

<?php

if (isset($_SESSION['admin_name'])) {
    header("location:" . BURLA . "index.php");
}

?>



<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!checkEmpty($email and !checkEmpty($password))) {

        if (checkEmail($email)) {

            $check = getRow('admins', 'admin_email', $email);
            $check_password = password_verify($password, $check['admin_password']);

            if ($check_password) {

                $_SESSION['admin_id'] = $check['admin_id'];
                $_SESSION['admin_name'] = $check['admin_name'];
                $_SESSION['admin_email'] = $check['admin_email'];

                header("location:" . BURLA . 'index.php');
            } else {
                $error_message = "Email or Password is Inncorrect";
            }
        } else {
            $error_message = "Enter a valid Email";
        }
    } else {
        $error_message = "Fileds cannot be Empty";
    }
}


?>













<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Dashboard | Login</title>
</head>

<body>



    <div class="col-sm-6 offset-sm-3 border p-3">
        <h2 class="text-center p-3 bg-primary text-white">Admin Login</h2>

        <?php require(BL . "functions/messages.php"); ?> <!-- To be able to view error or success messages-->

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="border p-5">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="pass">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>

</html>