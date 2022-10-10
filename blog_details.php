<?php
include_once("/includes/header.php");
include_once('/functions/myfunctions.php');
?>


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Blog details</h1>
                    <ul>
                        <li><a href="https://softwarebyte.co/">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$id = $_GET['id'];
$blog = getById('blogs', $id);
$blog = mysqli_fetch_assoc($blog);


?>
<section class="blog-news sec-mar">
    <div class="container">
        <div class="blog-wrapper">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-8 or2">
                    <div class="blog-details">
                        <div class="post-thumbnail">
                            <img src="uploads/<?= $blog['image'] ?>" alt="">
                        </div>
                        <h3><?= $blog['title'] ?></h3>
                        <?= $blog['content'] ?>

                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 or1">


                    <?php
                    include_once("/includes/widgets/service_card.php");
                    include_once("/includes/widgets/newest_post.php");
                    include_once("/includes/widgets/tag_card.php");
                    include_once("/includes/widgets/banner_card.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
include_once("/includes/widgets/lets_talk.php");
include_once("/includes/footer.php");
?>