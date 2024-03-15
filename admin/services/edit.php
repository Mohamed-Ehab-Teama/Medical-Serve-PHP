<?php require '../../config.php'; ?>
<?php
require BLA . 'inc/header.php';
?>


<?php

if (isset($_GET['id']) and is_numeric($_GET['id'])) {

    $row = getRow('services', 'serv_id', $_GET['id']);

    if ($row) {
        $service_id = $_GET['id'];
    } else {
        header("location:" . BURLA);
    }
} else {
    header("location:" . BURLA);
}

?>





<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
    <form action="<?php echo BURLA . "services/update.php" ?>" method="post">
        <br>
        <div class="form-group">
            <label for="city">New Service Name : </label>
            <input type="text" id="city" name="service_name" class="form-control" value="<?php echo $row['serv_name']; ?>">
            <input type="hidden" value="<?php echo $service_id ?>" name="service_id">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success">Edit Service</button>
    </form>
</div>



<?php require BLA . 'inc/footer.php'; ?>