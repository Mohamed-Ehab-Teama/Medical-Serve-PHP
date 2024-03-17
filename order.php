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



    //
} else {
    echo "error";
}
