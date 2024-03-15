<?php require '../../config.php'; ?>
<?php
require BLA . 'inc/header.php';
require BL . 'functions/validation.php';
?>

<?php

if (isset($_POST['submit'])) {

    $city = $_POST['city_name'];

    if (!checkEmpty($city)) {

        if (CheckMinuim($city, 3)) {

            $sql = "INSERT INTO cities (`city_name`) VALUES ('$city')";
            $success_message = db_insert($sql);
            // header("refresh:1;url=" . BURLA . "cities/add.php");
        } else {
            $error_message = "City Name cannot be less than 3 characters";
        }
    } else {
        $error_message = "City Name Cannot Be Empty!";
    }




    require BL . 'functions/messages.php';
} else {
    $error_message = "SomeThing Went Wrong !!!!!!!!";
}




?>




<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br>
        <div class="form-group">
            <label for="city">City Name : </label>
            <input type="text" id="city" name="city_name" class="form-control">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success">Add City</button>
    </form>
</div>



<?php require BLA . 'inc/footer.php'; ?>