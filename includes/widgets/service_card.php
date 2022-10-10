<div class="sidebar-widget">
    <h4>Services</h4>
    <ul class="service-list">

        <?php
        $all_services = getAll('services');
        $all_services = mysqli_fetch_all($all_services);
        foreach ($all_services as $item) {

        ?>
            <li><a href="service-details.php?id=<?= $item[0] ?>"><i><img src="assets/img/icons/dash-circle-icon.svg" style="filter: hue-rotate(220deg);" alt=""></i><?= $item[1] ?></a></li>
        <?php

        }
        ?>

    </ul>
</div>