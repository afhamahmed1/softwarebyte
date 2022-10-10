<div class="sidebar-widget">
    <h4>Newest Post</h4>
    <?php
    $recent_blogs = recentposts();
    $recent_blogs = mysqli_fetch_all($recent_blogs);
    foreach ($recent_blogs as $blog) {
        $date =  date_format(date_create($blog[11]), "F j, Y");
    ?>
        <div class="widget-cnt">
            <div class="wi" style=" max-width: 115px;">
                <a href="blog_details.php"><img style="min-height: 80px;object-fit: cover;" src="uploads/<?= $blog[2] ?>" alt=""></a>
            </div>
            <div class="wc">
                <h6><a href="blog_details.php"><?= $blog[1] ?></a></h6>
                <span class="post-date"><?= $date ?> </span>
            </div>
        </div>
    <?php
    }
    ?>
</div>