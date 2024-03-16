<?php require_once('../../config.php'); ?>
<?php require_once(BLA . 'inc/header.php'); ?>
<?php require(BL . 'functions/validation.php'); ?>


<?php

if (isset($_POST['submit'])) {

    foreach ($_POST as $key => $value) {
        $$key = $value;
    }
    // echo $name;
    // echo $email;
    // echo $password;


    if (!checkEmpty($name) and !checkEmpty($email) and !checkEmpty($password)) {

        if (checkEmail($email)) {

            if (passCheckLength($password)) {

                $new_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO admins (`admin_name`,`admin_email`,`admin_password`) VALUES ('$name','$email','$new_password') ";

                $success_message = db_insert($sql);
                // header("refresh:1;url=" . BURLA ."admins/add.php");


                //
            } else {
                $error_message = "Sorry, Password must be between 6-18 characters";
            }
        } else {
            $error_message = "Please, Type a valid Email !";
        }
    } else {
        $error_message = "Sorry, All Fields are Required !";
    }

    require(BL . 'functions/messages.php');
} else {
    $error_message = "Somthing Went Wrong. Don't try hacking!!!";
}

?>


<div class="col-sm-6 offset-sm-3 border p-3">
    <h2 class="text-center p-3 bg-primary text-white">Add New Admin</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- sent data to the same page. -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="pass">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Admin</button>
    </form>
</div>






<?php require_once(BLA . 'inc/footer.php'); ?>