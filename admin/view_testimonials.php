<?php

include_once("partials/_header.php");

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Products</h4>
                </div>
                <div class="card-body" style="overflow-y:auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Review</th>
                                <th>Rating</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $items = getAll('testimonials');
                            if (mysqli_num_rows($items) > 0) {
                                foreach ($items as $item) {

                            ?>
                                    <tr>
                                        <?php
                                        if ($item['image'] != "") {
                                        ?>
                                            <td>
                                                <img src="../uploads/<?= $item['image'] ?>" alt="<?= $item['alt_text'] ?>" width="50px" height="50px">
                                            </td>
                                        <?php
                                        } else {
                                        ?>
                                            <td><img src="../uploads/no_image_found.jpg" alt="no image"></td>
                                        <?php
                                        }
                                        ?>

                                        <td><?= $item['client_name'] ?></td>
                                        <td><?= $item['client_designation'] ?></td>
                                        <td><?= $item['review'] ?></td>
                                        <td><?= $item['rating'] ?></td>

                                        <td class="d-flex gap-2">
                                            <a href="edit_testimonial.php?id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>

                                            <form action="code.php" method="POST">
                                                <input type="text" hidden name='id' value="<?= $item['id'] ?>">
                                                <input type="text" hidden name='image' value="<?= $item['image'] ?>">
                                                <input type="hidden" name='type' value="testimonials">
                                                <button type='submit' class='btn btn-danger' name='delete_btn'>Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No Record";
                            }

                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include_once("partials/_footer.php");
?>