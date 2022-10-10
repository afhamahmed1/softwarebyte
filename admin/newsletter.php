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

                                <th>id</th>
                                <th>Email</th>


                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            $items =  getAll('newsletter');
                            if (mysqli_num_rows($items) > 0) {
                                foreach ($items as $item) {
                            ?>
                                    <tr>

                                        <td><?= $item['id'] ?></td>
                                        <td><?= $item['email'] ?></td>




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