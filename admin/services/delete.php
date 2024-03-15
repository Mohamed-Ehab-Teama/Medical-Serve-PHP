<?php require '../../config.php'; ?>
<?php require BLA . 'inc/header.php'; ?>




<?php

if (isset($_GET['id']) and is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $check = deleteRow('services', 'serv_id', $id);

    if ($check) {

        $success_message = "Data Deleted Successfully";
        header("refresh:1;url=" . BURLA . "services/index.php ");
        require BL . 'functions/messages.php';
    } else {
        $error_message = "Process Failed";
        header("refresh:1;url=url=" . BURLA . "services/index.php ");
        require BL . 'functions/messages.php';
    }
} else {

    $error_message = "Somthing Went Wrong";
}


?>













<?php require BLA . 'inc/footer.php'; ?>