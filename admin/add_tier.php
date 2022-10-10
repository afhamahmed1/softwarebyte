<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add Tier</h4>
                </div>

                <div class="card-body" style="overflow-y:auto">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <label class='mb-1' for="">Name</label>
                                <input type="text" required name='name' placeholder="Enter Name" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class='mb-1' for="">Small Title</label>
                                <input type="text" required name='small_title' placeholder="Enter Small Title" class="form-control mb-2">

                            </div>

                            <div class="col-md-6">
                                <label class='mb-1' for="">Categories</label>
                                <select name='category_id' class="form-select mb-2">
                                    <option selected>Select Category</option>
                                    <?php
                                    $categories = getBySection('categories', 'service');

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
                                <label class='mb-1' for="">Price</label>
                                <input type="number" required name='price' placeholder="Enter Price" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label class='mb-1' for="">Content</label>
                                <textarea rows="3" required name='content' id="content" placeholder="Enter Content" class="form-control mb-2"></textarea>
                            </div>
                            <input type="hidden" name="type" value="tiers">

                            <div class="col-md-12 mt-2">
                                <button type='submit' class="btn btn-primary" name="add_tier_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php

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