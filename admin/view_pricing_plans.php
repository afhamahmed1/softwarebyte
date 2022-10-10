<?php

include_once("partials/_header.php");

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Projects</h4>
                </div>
                <div class="card-body" style="overflow-y:auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Category</th>
                                <th>Tier</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $items = getAll('pricing_plans');
                            if (mysqli_num_rows($items) > 0) {
                                foreach ($items as $item) {
                                    $category_name = mysqli_fetch_assoc(section_name("pricing_plans", "categories", "category_id", $item["category_id"]));
                                    $tier_name = mysqli_fetch_assoc(section_name("pricing_plans", "tiers", "tier_id", $item["tier_id"]));
                            ?>
                                    <tr>

                                        <td><?= $item['id'] ?></td>
                                        <td><?= $category_name['name'] ?></td>
                                        <td><?= $tier_name['name'] ?></td>

                                        <td class="d-flex gap-2">
                                            <a href="edit_pricing_plan.php?id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>

                                            <form action="code.php" method="POST">
                                                <input type="text" hidden name='id' value="<?= $item['id'] ?>">

                                                <input type="hidden" name='type' value="pricing_plans">
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