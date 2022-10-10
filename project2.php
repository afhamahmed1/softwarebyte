<?php
include_once("includes/header.php");
include_once('functions/myfunctions.php');
?>


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Projects</h1>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="project-area2">
    <div class="container-fluid g-0">
        <div class="row g-0 portfolio-masonary-wrapper">

            <?php

            $category = getBySection('categories', 'project');

            $category = mysqli_fetch_all($category);
            foreach ($category as $item) {

            ?>
                <div class="redirect_to" style="display:none"><?= $item[0] ?></div>
                <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                    <div class="single-portfolio masonary" style= "margin:10px; border-radius:5px">

                        <div class="portfolio-data">
                            <img style="object-fit: contain;" src="uploads/<?= $item[2] ?>" alt="">
                        </div>
                        <div class="portfolio-inner d-flex justify-content-between" style="visibility:visible; opacity: 1;">

                            <h4><?= $item[1] ?></h4>



                            <a data-lightbox="<?= $item[1] ?>" href="uploads/<?= $item[2] ?>"><i class="fas fa-eye text-white"></i></a>

                        </div>
                    </div>
                </div>


            <?php
            }
            ?>
            <script>
                let redirects = document.getElementsByClassName('portfolio-masonary')

                for (let i = 0; i < redirects.length; i++) {


                    redirects[i].addEventListener('click', (e) => {
                        const redirect = redirects[0].parentElement.getElementsByClassName("redirect_to")[i].innerHTML
                        const url = "project.php?category_id=" + redirect
                        console.log(url)
                        window.location.replace(url);
                    })
                }
            </script>

        </div>
    </div>
</section>






<?php
include_once("includes/widgets/lets_talk.php");
include_once("includes/footer.php");
?>