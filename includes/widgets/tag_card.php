<div class="sidebar-widget">
    <h4>Popular tag</h4>
    <ul class="tag-list">
        <?php
        $all_services = getAll('services');
        $all_services = mysqli_fetch_all($all_services);
        foreach ($all_services as $item) {

        ?>
            <li><a href="service-details.php?id=<?= $item[0] ?>"><?= $item[1] ?></a></li>
        <?php
        }
        ?>

    </ul>
</div>