

<!-- in Case or error -->
<?php if (isset($error_message) and $error_message != '') : ?>
    <div class="col-sm-6 offset-sm-3 border p-3">
        <h2 class="alert alert-danger text-center">
            <?php
            echo $error_message;
            ?>
        </h2>
    </div>
<?php endif; ?>


<!-- In case of Success -->
<?php if (isset($success_message) and $success_message != '') : ?>
    <div class="col-sm-6 offset-sm-3 border p-3">
        <h2 class="alert alert-success text-center">
            <?php
            echo $success_message;
            ?>
        </h2>
    </div>
<?php endif; ?>