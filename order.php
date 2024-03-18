<?php require 'config.php'; ?>
<?php
require 'functions/validation.php';
?>

<?php

if (isset($_POST['submit'])) {

    foreach ($_POST as $key => $value) {
        $$key = $value;
    }

    // echo $service;
    // echo $city;
    // echo $name;
    // echo $email;
    // echo $phone;
    // echo $notes;

    // echo "<pre>";
    // print_r($_POST);

    if (!checkEmpty($name) and !checkEmpty($email) and !checkEmpty($phone) and !checkEmpty($notes)) {

        $sql = "
            INSERT INTO `orders` (`order_name`,`order_mobile`,`order_email`,`order_notes`,`order_serve_id`,`order_city_id`) 
            VALUES ('$name','$phone','$email','$notes','$service','$city')
        ";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            $success_message = "Order Made Successfully";
            header("refresh:2;url=index.php");
            require BL .  'functions/messages.php';
        } else {

            $error_message = "SomeThing Went Wrong";
        }




        //
    } else {
        $error_message = "Sorry, Please Fill All Fields";
    }



    //
} else {
    echo "error";
}
