<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add Pricing Plan</h4>
                </div>
                <?php
                $section = "service";

                ?>
                <div class="card-body" style="overflow-y:auto">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label class='mb-1' for="">Categories</label>
                                <select name='category_id' class="form-select mb-2">
                                    <option selected>Select Category</option>
                                    <?php
                                    $categories = getBySection('categories', $section);

                                    if (mysqli_num_rows($categories) > 0) {
                                        foreach ($categories as $item) {
                                    ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
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
                                    <option selected>Select tier</option>
                                    <?php
                                    $tiers = getAll('tiers');
                                    if (mysqli_num_rows($tiers) > 0) {
                                        foreach ($tiers as $item) {
                                    ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['name'] ?> <?= $item['name'] ?></option>
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
                                <button type='submit' class="btn btn-primary" name="add_pricing_plan_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

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