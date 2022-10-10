<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit Service</h4>
                </div>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET["id"];

                    $item = getById("tiers", $id);
                    $item = mysqli_fetch_array($item);
                ?>
                    <div class="card-body" style="overflow-y:auto">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-6">
                                    <label class='mb-1' for="">name</label>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="text" required name='name' placeholder="Enter Name" value="<?= $item["name"] ?>" class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Small Title</label>
                                    <input type="text" required name='small_title' placeholder="Enter Small Title" value="<?= $item["small_title"] ?>" class="form-control mb-2">

                                </div>



                                <div class="col-md-12">
                                    <label class='mb-1' for="">Price</label>
                                    <input type="number" required name='price' value="<?= $item["price"] ?>" placeholder="Enter Price" class="form-control mb-2">
                                </div>

                                <div class="col-md-12">
                                    <label class='mb-1' for="">Content</label>
                                    <textarea rows="3" required name='content' id="content" placeholder="Enter Content" class="form-control mb-2"> <?= $item["content"] ?></textarea>
                                </div>


                                <input type="hidden" value="tiers" name="type">

                                <div class="col-md-12 mt-2">
                                    <button type='submit' class="btn btn-primary" name="edit_tier_btn">Save</button>
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