<?php
include_once("includes/header.php");
include_once('functions/myfunctions.php')
?>


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Blog</h1>
                    <ul>
                        <li><a href="https://softwarebyte.co/">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-news sec-mar">
    <div class="container">
        <div class="blog-wrapper">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">


                    <?php
                    include_once("includes/widgets/service_card.php");
                    include_once("includes/widgets/newest_post.php");
                    include_once("includes/widgets/tag_card.php");
                    include_once("includes/widgets/banner_card.php");
                    ?>


                </div>
                <div class="col-md-6 col-lg-8 col-xl-8">
                    <div class="row g-4">
                        <?php
                        $all_blogs = getAll('blogs');
                        
                        $all_blogs = mysqli_fetch_all($all_blogs);
                        foreach ($all_blogs as $item) {
 
                            $tag = getByColumn('blog_tags',  'section_id', $item[0]);
                            $tagId = mysqli_fetch_assoc($tag);
                            $tag = getById('tags',$tagId['tag_id']);
                            $tag = mysqli_fetch_assoc($tag);
                            
                            if ($tag == null) {
                                $tag = array();
                                $tag["name"] = "";
                                
                            }

                        ?>
                            <div class="col-12 col-lg-6 col-xl-6">
                                <div class="signle-news">
                                    <div class="tag">
                                        <a href="#"><?= $tag['name'] ?></a>
                                    </div>
                                    <div class="post-img">
                                        <a href="blog_details.php?id=<?= $item[0] ?>"><img src="uploads/<?= $item[2] ?>" alt=""></a>
                                    </div>
                                    <div class=" news-content">

                                        <h3 style="padding-top:20px;"><a href="blog_details.php?id=<?= $item[0] ?>"><?= $item[1] ?></a></h3>
                                        <div class="mini-descript-blog">
                                            <p><?= $item[8] ?></p>
                                        </div>
                                        <div class="view-btn">
                                            <a href="blog_details.php?id=<?= $item[0] ?>">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    let mini_descrp1 = document.getElementsByClassName('mini-descript-blog')
    for (let i = 0; i < mini_descrp1.length; i++) {
        mini_descrp1[i].innerText = mini_descrp1[i].innerText.substr(0, 100)

    }
</script>





<?php
include_once("includes/widgets/lets_talk.php");
include_once("includes/footer.php");
?>