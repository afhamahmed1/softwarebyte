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

                    $item = getById("testimonials", $id);
                    $item = mysqli_fetch_array($item);
                ?>
                    <div class="card-body" style="overflow-y:auto">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-6">
                                    <label class='mb-1' for="">Client Name</label>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="text" required name='client_name' placeholder="Enter client name" value="<?= $item["client_name"] ?>" class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Client Designation</label>
                                    <input type="text" required name='client_designation' placeholder="Enter Client Designation" value="<?= $item["client_designation"] ?>" class="form-control mb-2">

                                </div>


                                <div class="col-md-12">
                                    <label class='mb-1' for="">Review</label>
                                    <textarea rows="3" required name='review' placeholder="Enter Review" class="form-control mb-2"><?= $item["review"] ?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class='mb-1' for="">Rating</label>
                                    <input type="number" required name='rating' value="<?= $item["rating"] ?>" placeholder="Enter Rating" class="form-control mb-2">
                                </div>

                                <div class="col-md-9">
                                    <label for="">Upload Image</label>
                                    <input type="text" hidden value='<?= $item['image'] ?>' name='old_image'>
                                    <input type="file" name='image' class="form-control mb-2">
                                </div>
                                <div class="col-md-3">
                                    <label for="" style="width : 100%">Current Image</label>
                                    <img src="../uploads/<?= $item['image'] ?>" alt="" width="50px" height="50px">
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Alt Text</label>
                                    <input type="text" required name='alt_text' placeholder="Enter Alt Text" value="<?= $item["alt_text"] ?>" class="form-control mb-2">
                                </div>
                                <input type="hidden" value="testimonials" name="type">

                                <div class="col-md-12 mt-2">
                                    <button type='submit' class="btn btn-primary" name="edit_testimonial_btn">Save</button>
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