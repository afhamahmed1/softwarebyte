<?php

include_once("partials/_header.php")

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Categories</h4>
                </div>
                <div class="card-body" style="overflow-y:auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            if (isset($_GET['section'])) {
                                $section = $_GET['section'];
                                $items =  getBySection('tags', $section);
                                if (mysqli_num_rows($items) > 0) {
                                    foreach ($items as $item) {
                            ?>
                                        <tr>

                                            <td><?= $item['name'] ?></td>
                                            <td style="overflow-x:scroll; max-width:200px"><?= $item['description'] ?></td>

                                            <td class="d-flex gap-2">
                                                <a href="edit_tag.php?id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>

                                                <form action="code.php" method="POST">
                                                    <input type="text" hidden name='id' value="<?= $item['id'] ?>">
                                                    <input type="text" hidden name='section' value="<?= $section ?>">
                                                    <button type='submit' class='btn btn-danger' name='delete_tag_btn'>Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                            <?php
                                    }
                                } else {
                                    echo "No Record";
                                }
                            } else {
                                echo "Please choose the section";
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