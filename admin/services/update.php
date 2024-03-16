<?php require '../../config.php'; ?>
<?php
require BLA . 'inc/header.php';
require BL . 'functions/validation.php';
?>



<?php

if (isset($_POST['submit'])) {

    $service = $_POST['service_name'];
    $id = $_POST['service_id'];

    if (!checkEmpty($service)) {

        if (CheckMinuim($service, 3)) {

            $row = getRow('services', 'serv_id', $id);

            if ($row) {

                $sql = "UPDATE `services` SET `serv_name` = '$service' WHERE `serv_id` = '$id' ";
                $success_message = db_update($sql);
                // header("refresh:1;url=" . BURLA . "services/index.php");
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