<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add Testimonial</h4>
                </div>

                <div class="card-body" style="overflow-y:auto">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <label class='mb-1' for="">Client Name</label>
                                <input type="text" required name='client_name' placeholder="Enter client name" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class='mb-1' for="">Client Designation</label>
                                <input type="text" required name='client_designation' placeholder="Enter Client Designation" class="form-control mb-2">

                            </div>


                            <div class="col-md-12">
                                <label class='mb-1' for="">Review</label>
                                <textarea rows="3" required name='review' placeholder="Enter Review" class="form-control mb-2"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class='mb-1' for="">Rating</label>
                                <input type="number" required name='rating' placeholder="Enter Rating" class="form-control mb-2">
                            </div>

                            <div class="col-md-6">
                                <label class='mb-1' for="">Upload Image</label>
                                <input type="file" required name='image' class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class='mb-1' for="">Alt Text</label>
                                <input type="text" required name='alt_text' placeholder="Enter Alt Text" class="form-control mb-2">
                            </div>
                            <input type="hidden" value="testimonials" name="type">


                            <div class="col-md-12 mt-2">
                                <button type='submit' class="btn btn-primary" name="add_testimonial_btn">Save</button>
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