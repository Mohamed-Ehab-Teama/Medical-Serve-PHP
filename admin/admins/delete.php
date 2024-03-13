<?php require '../../config.php'; ?>
<?php require BLA . 'inc/header.php'; ?>



<?php

if(isset($_GET['id']) and is_numeric($_GET['id'])){

    $id = $_GET['id'] ;

    $check = deleteRow('admins','admin_id',$id);

    if($check)
    {

        $success_message = "Data Deleted successfully";
        header("refresh:1;url=" . BURLA . "admins/index.php" );
        require BL . 'functions/messages.php';

    }
    else
    {
        $error_message = "SomeThing Went wrong";
    }


}

?>



<?php require BLA . 'inc/footer.php'; ?>