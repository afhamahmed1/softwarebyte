<?php

include_once("partials/_header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add Service</h4>
                </div>
                <?php
                if (isset($_GET['section'])) {
                    $tags_table = "service_tags";
                    $section = $_GET["section"];
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    } else {
                        $id = 0;
                    }


                ?>
                    <div class="card-body" style="overflow-y:auto">
                        <form action="code.php" method="POST" style="display:flex;align-items: flex-end; gap:10px">
                            <div class="col-md-9">
                                <input type="hidden" name="url" value="<?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) ?>">
                                <input type="hidden" name="tags_table" value="<?= $tags_table ?>">
                                <input type="hidden" name="section" value="<?= $section ?>">
                                <label class='mb-1' for="">Select Tag</label>
                                <select name='tag_id' class="form-select mb-2">
                                    <option selected>Select Tag</option>
                                    <?php
                                    $tags = getBySection('tags', $section);
                                    if (mysqli_num_rows($tags) > 0) {
                                        foreach ($tags as $item) {
                                    ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "No Tags";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-3">

                                <button type="submit" name="add_tags" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                        <style>
                            .onclick_delete:hover {
                                background-color: red;
                            }
                        </style>
                        <div class="col-md-12 mb-2" style="display:flex; flex-direction:column;">
                            <label class="mb-2" for="">Selected Tags</label>
                            <div style="display:flex; gap:5px;flex-wrap: wrap;">
                                <?php
                                $all_tags = getByColumn($tags_table, 'section_id', $id);
                                $all_tags = mysqli_fetch_all($all_tags);
                                if (count($all_tags) > 0) {
                                    foreach ($all_tags as $tag) {
                                        $tag_name = getById('tags', $tag[1]);
                                        $tag_name = mysqli_fetch_assoc($tag_name);

                                ?>

                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="tags_table" value="<?= $tags_table ?>">
                                            <input type="hidden" name="url" value="<?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) ?>">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <input type="hidden" name="section" value=<?= $section ?>>
                                            <input type="hidden" name="tag_id" value="<?= $tag[1] ?>">
                                            <button name="delete_tags" class="btn btn-primary onclick_delete" style="max-width:300px"><?= $tag_name['name'] ?></button>
                                        </form>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <label for="">no tags selected</label>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Category</label>
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


                                <div class=" col-md-6">
                                    <label class='mb-1' for="">Title</label>
                                    <input type="text" required name='title' placeholder="Enter service title" class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Meta Title</label>
                                    <input type="text" name='meta_title' placeholder="Enter service meta title" class="form-control mb-2">

                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Service Number</label>
                                    <input type="text" required name='number' placeholder="Enter Service Number" class="form-control mb-2">
                                </div>

                                <div class="col-md-12">
                                    <label class='mb-1' for="">Upload Icon Image</label>
                                    <input type="file" required name='icon' class="form-control mb-2">
                                </div>


                                <div class="col-md-12">
                                    <label class='mb-1' for="">Meta Description</label>
                                    <textarea rows="3" name='meta_description' placeholder="Enter Meta Description" class="form-control mb-2"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Upload Image</label>
                                    <input type="file" required name='image' class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <label class='mb-1' for="">Alt Text</label>
                                    <input type="text" name='alt_text' placeholder="Enter Alt Text" class="form-control mb-2">
                                </div>
                                <div class="col-md-12">
                                    <label class='mb-1' for="">Content</label>
                                    <textarea rows="3" name='content' id="content" placeholder="Enter Content" class="form-control mb-2"></textarea>
                                </div>

                                <input type="hidden" name="url" value="<?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) ?>">
                                <input type="hidden" name="tags_table" value=<?= $tags_table ?>>
                                <input type="hidden" name="type" value="services">
                                <input type="hidden" name="section" value="<?= $section ?>">
                                <div class="col-md-12 mt-2">
                                    <button type='submit' class="btn btn-primary" name="add_btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php
                } else {
                    redirect("index.php", "Something Went Wrong");
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