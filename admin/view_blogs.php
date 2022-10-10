<?php

include_once("partials/_header.php");

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Blogs</h4>
                </div>
                <div class="card-body" style="overflow-y:auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Tag</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $items = getAll('blogs');
                            if (mysqli_num_rows($items) > 0) {
                                foreach ($items as $item) {
                                    $category_name = mysqli_fetch_assoc(section_name("blogs", "categories", "category_id", $item["category_id"]));
                                    $tag_id = mysqli_fetch_all(getByColumn('blog_tags', 'section_id', $item['id']));
                            ?>
                                    <tr>
                                        <?php
                                        if ($item['image'] != "") {
                                        ?>
                                            <td>
                                                <img src="../uploads/<?= $item['image'] ?>" alt="<?= $item['alt_text'] ?>" width="50px" height="50px">
                                            </td>
                                        <?php
                                        } else {
                                        ?>
                                            <td><img src="../uploads/no_image_found.jpg" alt="no image"></td>
                                        <?php
                                        }
                                        ?>
                                        <td><?= $item['title'] ?></td>
                                        <td><?= $category_name['name'] ?></td>
                                        <td style="overflow-x:scroll; max-width:200px;">
                                            <?php
                                            foreach ($tag_id as $tag) {
                                                $tag_name = mysqli_fetch_assoc(getById('tags', $tag[1]));
                                                echo $tag_name['name'] . " ";
                                            }


                                            ?>
                                        </td>
                                        <td class="d-flex gap-2">
                                            <a href="edit_blog.php?id=<?= $item['id'] ?>&section=blog" class="btn btn-primary">Edit</a>

                                            <form action="code.php" method="POST">
                                                <input type="text" hidden name='id' value="<?= $item['id'] ?>">
                                                <input type="text" hidden name='image' value="<?= $item['image'] ?>">
                                                <input type="hidden" name='type' value="blogs">
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