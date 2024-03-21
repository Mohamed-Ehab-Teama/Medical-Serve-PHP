<?php require '../../config.php'; ?>
<?php
require BLA . 'inc/header.php';
require BL . 'functions/validation.php';
require(BL . 'functions/sanitization.php'); 
?>

<?php

if (isset($_POST['submit'])) {

    $service0 = $_POST['service_name'];
    $service = cleanData($service0);

    if (!checkEmpty($service)) {

        if (CheckMinuim($service, 3)) {

            $sql = "INSERT INTO services (`serv_name`) VALUES ('$service')";
            $success_message = db_insert($sql);
            // header("refresh:1;");
        } else {
            $error_message = "Service Name cannot be less than 3 characters";
        }
    } else {
        $error_message = "Service Name Cannot Be Empty!";
    }




    require BL . 'functions/messages.php';
} else {
    $error_message = "SomeThing Went Wrong !!!!!!!!";
}




?>




<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br>
        <div class="form-group">
            <label for="city">Service Name : </label>
            <input type="text" id="city" name="service_name" class="form-control">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success">Add Service</button>
    </form>
</div>



<?php require BLA . 'inc/footer.php'; ?>