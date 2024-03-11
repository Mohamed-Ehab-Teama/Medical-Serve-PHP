<?php require '../../config.php'; ?>
<?php
require BLA . 'inc/header.php';
require BL . 'functions/validation.php';
?>



<?php

if (isset($_POST['submit'])) {

    $city = $_POST['city_name'];
    $city_id = $_POST['city_id'];

    if (!checkEmpty($city)) {

        if (CheckMinuim($city, 3)) {

            $row = getRow('cities', 'city_id', $city_id);

            if ($row) {

                $sql = "UPDATE `cities` SET `city_name` = '$city' WHERE `city_id` = '$city_id' ";
                $success_message = db_update($sql);
                header("refresh:1;url=" . BURLA . "cities/index.php");


            } else {
                header("location:");
            }
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







<?php require BLA . 'inc/footer.php'; ?>