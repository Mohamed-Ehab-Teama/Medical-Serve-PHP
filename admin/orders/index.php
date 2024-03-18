<?php require '../../config.php'; ?>
<?php require BLA . 'inc/header.php'; ?>


<style>
    *{
        font-size: 1rem;
    }
</style>


<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white">
        <table class="table teble-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Service</th>
                    <th scope="col">City</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = getRows('orders');
                $x = 1;
                ?>
                <?php foreach ($data as $row) : ?>
                    <tr class="text-center">
                        <td scope="row"> <?php echo $x++; ?> </td>
                        <td class="text-center">
                            <?php
                            if (isset($row)) {
                                echo $row['order_name'];
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($row)) {
                                echo $row['order_email'];
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($row)) {
                                echo $row['order_mobile'];
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($row)) {
                                echo $row['order_serve_id'];
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($row)) {
                                echo $row['order_city_id'];
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($row)) {
                                echo $row['order_notes'];
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <a href=" <?php echo BURLA . 'orders/delete.php?id=' . $row['order_id']; ?> " class="btn btn-danger delete">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </h3>
</div>




<?php require BLA . 'inc/footer.php'; ?>