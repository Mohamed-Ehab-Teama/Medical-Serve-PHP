<?php require 'config.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Make An Order</title>
</head>

<body>







    <div class="container">
        <div class="row">
            <form class="row g-3 border" action="order.php" method="post">
                <h2 class="text-center p-3 bg-primary text-white">Make an Order</h2>
                <!-- Select for Services -->
                <fieldset>
                    <h4>Select Service:</h4>
                    <select name="service" class="form-select" aria-label="Default select example">
                        <?php $data = getRows('services'); ?>
                        <?php foreach ($data as $row) : ?>
                            <option value="<?php echo $row['serv_id']; ?>"> <?php echo $row['serv_name']; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <!-- Select for Cities -->
                <fieldset>
                    <h4>Select City:</h4>
                    <select name="city" class="form-select" aria-label="Default select example">
                        <?php $data = getRows('cities'); ?>
                        <?php foreach ($data as $row) : ?>
                            <option value="<?php echo $row['city_id']; ?>"> <?php echo $row['city_name']; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <!-- Text input for name & email & phone number -->
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <!-- Mobile -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number:</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <!-- Text Area for Notes -->
                <div class="mb-3">
                    <label for="notes" class="form-label">Write Any Note Here:</label>
                    <textarea class="form-control" id="notes" rows="3" name="notes"></textarea>
                </div>
                <!-- Submit Data -->
                <button type="submit" name="submit" class="btn btn-primary">Make Order</button>
            </form>
        </div>
    </div>
















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
</body>

</html>