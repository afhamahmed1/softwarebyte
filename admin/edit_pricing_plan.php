<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit Pricing Plan</h4>
                </div>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET["id"];
                    $section = "service";
                    $item = getById("pricing_plans", $id);
                    $item = mysqli_fetch_array($item);
                ?>
                    <div class="card-body" style="overflow-y:auto">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Select Category</label>
                                    <select name='category_id' class="form-select mb-2">
                                        <option selected>Select Category</option>
                                        <?php
                                        $categories = getBySection('categories', $section);

                                        if (mysqli_num_rows($categories) > 0) {
                                            foreach ($categories as $cate_item) {
                                        ?>
                                                <option <?= $cate_item["id"] == $item["category_id"] ? "selected" : "" ?> value="<?= $cate_item['id'] ?>"><?= $cate_item['name'] ?></option>
                                        <?php
                                            }
                                        } else {
                                            echo "No Categories";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Select Tier</label>
                                    <select name='tier_id' class="form-select mb-2">
                                        <option selected>Select Tier</option>
                                        <?php
                                        $tiers = getAll('tiers');
                                        if (mysqli_num_rows($tiers) > 0) {
                                            foreach ($tiers as $tier_item) {
                                        ?>
                                                <option <?= $tier_item["id"] == $item["tier_id"] ? "selected" : "" ?> value="<?= $tier_item['id'] ?>"><?= $tier_item['name'] ?></option>
                                        <?php
                                            }
                                        } else {
                                            echo "No tiers";
                                        }
                                        ?>
                                    </select>
                                </div>


                                <input type="hidden" name="type" value="pricing_plans">

                                <div class="col-md-12 mt-2">
                                    <button type='submit' class="btn btn-primary" name="edit_btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php
                } else {
                    redirect("view_services.php", "please choose the item to be edited");
                }

                ?>

            </div>
        </div>
    </div>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace("content")
</script>
<?php

include_once("partials/_footer.php");
?>