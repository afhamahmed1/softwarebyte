<?php
include_once("includes/header.php");
include_once('functions/myfunctions.php');
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $category_name = mysqli_fetch_assoc(getById('categories', $category_id));
?>


    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <h1>Projects</h1>
                        <ul>
                            <li><a href="https://softwarebyte.co/">Home</a></li>
                            <li><a href="projects">Projects</a></li>
                            <li><?= $category_name['name'] ?></li>
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

                $category = getByColumn('projects', 'category_id', $category_id);

                $category = mysqli_fetch_all($category);
                foreach ($category as $item) {

                ?>

                    <div class="col-md-4 col-lg-4 col-xl-4 portfolio-masonary">
                        <a data-lightbox="<?= $item[1] ?>" href="uploads/<?= $item[2] ?>">
                            <div class="single-portfolio masonary" style="margin:10px; border-radius:5px" >

                                <div class="portfolio-data">
                                    <img src="uploads/<?= $item[2] ?>" style="object-fit: contain;" alt="<?= $item[3] ?>">
                                </div>
                                <div class="portfolio-inner d-flex justify-content-between" style="visibility: visible;opacity: 1;">

                                    <h4><?= $item[1] ?></h4>



                                    <a data-lightbox="<?= $item[1] ?>" href="uploads/<?= $item[2] ?>"><i class="fas fa-eye text-white"></i></a>


                                </div>
                            </div>
                        </a>
                    </div>


                <?php
                }
                ?>

            <?php
        }
            ?>
            </div>

        </div>
    </section>
    <section style="padding:100px 0px">
        <div class="container">
            <div class="releted-project">
                <h3>Projects</h3>
                <div class="swiper releted-project-slider">
                    <div class="swiper-wrapper">
                        <?php

                        $category = getBySection('categories', 'project');
                        $category = mysqli_fetch_all($category);
                        foreach ($category as $item) {


                        ?>
                            <div class="swiper-slide">

                                <div class="single-portfolio">
                                    <div class="redirect_to" style="display:none"><?= $item[0] ?></div>
                                    <div class="portfolio-data">
                                        <img src="uploads/<?= $item[2] ?>" style="object-fit: cover; ">
                                    </div>
                                    <div class="portfolio-inner">

                                        <h4><?= $item[1] ?></h4>
                                        <div class="portfolio-hover">
                                            <a class="case-btn">View All</a>
                                            <a data-lightbox="image1"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <script>
                            let redirects = document.getElementsByClassName('single-portfolio')

                            for (let i = 0; i < redirects.length; i++) {



                                redirects[i].addEventListener('click', (e) => {
                                    let redirect = e.target.parentElement.children[0].innerHTML
                                    if (redirect== ""){
                                         redirect = e.target.parentElement.parentElement.children[0].innerHTML
                                    }
                                    
                                    console.log(redirect)

                                    const url = "project.php?category_id=" + redirect

                                    window.location.replace(url);
                                })
                            }
                        </script>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>




    <?php
    include_once("includes/widgets/lets_talk.php");
    ?>

    <?php

    include_once("includes/footer.php");
    ?>