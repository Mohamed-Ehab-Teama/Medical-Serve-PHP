<?php require '../../config.php'; ?>
<?php require BLA . 'inc/header.php'; ?>




<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white">
        <table class="table teble-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = getRows('cities');
                $x = 1;
                ?>
                <?php foreach ($data as $row) : ?>
                    <tr class="text-center">
                        <td scope="row"> <?php echo $x++; ?> </td>
                        <td class="text-center">
                            <?php
                                if(isset($row)){
                                echo $row['city_name']; 
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo BURLA . 'cities/edit.php?id=' . $row['city_id']; ?>" class="btn btn-info">Edit</a>
                            <a href=" <?php echo BURLA . 'cities/delete.php?id=' . $row['city_id']; ?> " class="btn btn-danger delete">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </h3>
</div>




<?php require BLA . 'inc/footer.php'; ?>