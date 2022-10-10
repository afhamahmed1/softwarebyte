<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit Tag</h4>
                </div>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET["id"];
                    $item = getById("tags", $id);
                    $item = mysqli_fetch_array($item);
                ?>
                    <div class="card-body" style="overflow-y:auto">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-6">
                                    <label class='mb-1' for="">Name</label>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="text" value="<?= $item["name"] ?>" required name='name' placeholder="Enter category name" class="form-control mb-2">
                                </div>
                                <div class="col-md-12">
                                    <label class='mb-1' for="">Section</label>
                                    <select required name='section' class="form-select mb-2">

                                        <option <?= $item["section"] == "service" ? "selected" : "" ?> value="service">service</option>
                                        <option <?= $item["section"] == "project" ? "selected" : "" ?> value="project">project</option>
                                        <option <?= $item["section"] == "blog" ? "selected" : "" ?> value="blog">blog</option>

                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label class='mb-1' for="">Description</label>
                                    <textarea rows="3" name='description' placeholder="Enter Description" class="form-control mb-2"> <?= $item["description"] ?></textarea>
                                </div>



                                <div class="col-md-12 mt-2">
                                    <button type='submit' class="btn btn-primary" name="edit_tag_btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php
                } else {
                    redirect("view_tags.php", "please choose the item to be edited");
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