<?php require '../../config.php'; ?>
<?php
require BLA . 'inc/header.php';
?>


<?php

if (isset($_GET['id']) and is_numeric($_GET['id'])) {

    $row = getRow('cities', 'city_id', $_GET['id']);

    if ($row) {
        $city_id = $_GET['id'];
    } else {
        header("location:" . BURLA);
    }
} else {
    header("location:" . BURLA);
}

?>





<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
    <form action="<?php echo BURLA . "cities/update.php" ?>" method="post">
        <br>
        <div class="form-group">
            <label for="city">New City Name : </label>
            <input type="text" id="city" name="city_name" class="form-control" value="<?php echo $row['city_name']; ?>">
            <input type="hidden" value="<?php echo $city_id ?>" name="city_id">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success">Edit City</button>
    </form>
</div>



<?php require BLA . 'inc/footer.php'; ?>