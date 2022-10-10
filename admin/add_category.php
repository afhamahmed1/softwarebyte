<?php

include_once("partials/_header.php")

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body" style="overflow-y:auto">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <label class='mb-1' for="">Name</label>
                                <input required type="text" name='name' placeholder="Enter category name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class='mb-1' for="">Section</label>
                                <select required name='section' class="form-select mb-2">

                                    <option value="service">service</option>
                                    <option value="project">project</option>
                                    <option value="blog">blog</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class='mb-1' for="">Upload Image</label>
                                <input type="file" name='image' class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label class='mb-1' for="">Description</label>
                                <textarea rows="3" name='description' placeholder="Enter Description" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12 mt-2">
                                <button type='submit' class="btn btn-primary" name="add_category_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php

include_once("partials/_footer.php");
?>