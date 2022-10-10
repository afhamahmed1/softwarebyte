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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Small Title</th>
                                <th>Price</th>
                                <th>Content</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $items = getAll('tiers');
                            if (mysqli_num_rows($items) > 0) {
                                foreach ($items as $item) {
                                    $category = section_name('tiers', 'categories', 'category_id', $item['category_id']);
                                    $category = mysqli_fetch_assoc($category);
                            ?>
                                    <tr>

                                        <td><?= $item['name'] ?></td>
                                        <td><?= $category['name'] ?></td>
                                        <td><?= $item['small_title'] ?></td>
                                        <td><?= $item['price'] ?></td>
                                        <td><?= $item['content'] ?></td>

                                        <td style="display:flex; gap:2px; align-items:center; height: 100%">
                                            <a href="edit_tier.php?id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>

                                            <form action="code.php" method="POST">
                                                <input type="text" hidden name='id' value="<?= $item['id'] ?>">
                                                <input type="hidden" name='type' value="tiers">
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