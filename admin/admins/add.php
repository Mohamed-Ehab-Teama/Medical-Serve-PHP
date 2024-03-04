<?php require_once('../../config.php'); ?>
<?php require_once(BLA . 'inc/header.php'); ?>




<div class="col-sm-6 offset-sm-3 border p-3">
    <h2 class="text-center p-3 bg-primary text-white">Add New Admin</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- sent data to the same page. -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="pass">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Admin</button>
    </form>
</div>






<?php require_once(BLA . 'inc/footer.php'); ?>