<?php
require_once('../config.php');
require_once(BLA . 'inc/header.php');
?>

<style>
    .div-style {
        border: black solid 2px;
        width: 45%;
        display: inline-block;
        margin: 10px 20px 10px 10px;
        border-radius: 30px;
        padding: 18px;
    }
</style>


<!--  All Cities  -->
<div class="div-style">
    <h3>All Cities</h3>
    <p>The number of Cities avaliable now are: </p>
    <br>
    <a href="cities/index.php" class="btn btn-info"><?php echo NumOfRows('cities', 'city_id'); ?></a>
</div>
<!--  All Services  -->
<div class="div-style">
    <h3>All Services</h3>
    <p>The number of Services avaliable now are: </p>
    <br>
    <a href="services/index.php" class="btn btn-info"><?php echo NumOfRows('services', 'serv_id'); ?></a>
</div>
<!--  All Orders  -->
<!-- <div class="div-style"></div> -->
<!--  All Orders This Day  -->
<!-- <div class="div-style"></div> -->
























<?php require_once(BLA . 'inc/footer.php'); ?>