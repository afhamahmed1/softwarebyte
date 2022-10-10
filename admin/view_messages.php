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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            $items =  getAll('messages');
                            if (mysqli_num_rows($items) > 0) {
                                foreach ($items as $item) {
                            ?>
                                    <tr>

                                        <td><?= $item['name'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td><?= $item['phone'] ?></td>
                                        <td><?= $item['subject'] ?></td>
                                        <td style="overflow-y:scroll; text-wrap:wrap; width:600px"><?= $item['message'] ?></td>



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