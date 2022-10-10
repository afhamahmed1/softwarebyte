<?php
include_once("includes/header.php");
include_once('functions/myfunctions.php');
?>


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Service</h1>
                    <ul>
                        <li><a href="https://softwarebyte.co/">Home</a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="service-area sec-pad">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="title">
                    <span>what we do</span>
                    <h2>we work performed for client happy.</h2>

                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="row g-4">
                    <?php
                    $service_query = getAll('services');
                    $services = mysqli_fetch_all($service_query);

                    $count = 0;
                    foreach ($services as $item) {

                        $category = mysqli_fetch_assoc(getById('categories', $item[9]));

                        if ($category['name'] == $item[1]) {

                    ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="single-service">
                                    <span class="count">0<?= $item[4] ?></span>
                                    <div class="service-icon">
                                        <i><img src="uploads/<?= $category['image'] ?>" alt=""></i>
                                    </div>
                                    <div class="service-content">
                                        <h4><?= $item[1] ?></h4>
                                        <div class="mini-descript-blog" style="color:white">
                                            <p><?= $item[8] ?></p>
                                        </div>
                                        <a style="margin-top:20px" href="<?= $item[12] ?>">read more<i><img src="assets/img/icons/arrow-circle.png" alt=""></i></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $count++;
                        }
                    }
                    ?>


                </div>
            </div>

        </div>
    </div>
</section>

<script>
    let mini_descrp1 = document.getElementsByClassName('mini-descript-blog')
    for (let i = 0; i < mini_descrp1.length; i++) {
        mini_descrp1[i].innerText = mini_descrp1[i].innerText.substr(0, 50) + "..."

    }
</script>
<section class="how-we-work sec-mar-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-4">
                <div class="title black">
                    <span>How We Work</span>
                    <h2>Our Unique Work Process.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper work-process">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/work-process-slider-1.png" alt="">
                                <div class="work-process-inner">
                                    <b>01</b>
                                    <h4>Brainstorm & Wirefirm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/work-process-slider-2.jpg" alt="">
                                <div class="work-process-inner">
                                    <b>02</b>
                                    <h4>Brainstorm & Wirefirm</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="pricing_plan" class="pricing-plan sec-mar">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-lg-6 col-xl-5">
                <div class="title black text-center">
                    <span>Pricing Plan</span>
                    <h2>Join Now For Your Business.</h2>
                </div>
            </div>
        </div>

        <ul class="nav nav-pills mb-3 justify-content-center align-items-center" id="pills-tab" role="tablist">
            <?php
            $category_id = getAllUnique('tiers', 'category_id');
            $category_id = mysqli_fetch_all($category_id);

            foreach ($category_id as $category) {
                $category_names = getById('categories', $category[0]);
                $category_name = mysqli_fetch_assoc($category_names);

            ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="<?= str_replace(' ', '', $category_name['name']) ?>-tab" data-bs-toggle="pill" data-bs-target="#<?= str_replace(' ', '', $category_name['name']) ?>" type="button" role="tab" aria-controls="<?= str_replace(' ', '', $category_name['name']) ?>" aria-selected="true"><?= $category_name['name'] ?></button>
                </li>
            <?php
            }
            ?>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <?php
            $category_id = getAllUnique('tiers', 'category_id');
            $category_id = mysqli_fetch_all($category_id);
            foreach ($category_id as $category) {
                $category_names = getById('categories', $category[0]);
                $category_name = mysqli_fetch_assoc($category_names);
                $tiers = getByColumn('tiers', 'category_id', $category[0]);
                $tiers = mysqli_fetch_all($tiers);

            ?>
                <div class="tab-pane fade show active" id="<?= str_replace(' ', '', $category_name['name']) ?>" role="tabpanel" aria-labelledby="<?= str_replace(' ', '', $category_name['name']) ?>-tab">
                    <div class="row">
                        <?php
                        foreach ($tiers as $tier) {
                        ?>
                            <div class="col-md-6 col-lg-4 col-xl-4">
                                <div id="1" class="single-price-box">

                                    <h3><?= $tier[1] ?></h3>
                                    <span><?= $tier[2] ?></span>
                                    <h2>$<?= $tier[3] ?></h2>
                                    <ul class="feature-list">
                                        <?= $tier[5] ?>
                                    </ul>
                                    <div class="pay-btn">
                                        <a>Pay Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            <?php
            }
            ?>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div id="4" class="single-price-box">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <h2>$150.99/<sub>Per Year</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a>Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div id="5" class="single-price-box">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <h2>$199.99/<sub>Per Year</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a>Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div id="6" class="single-price-box">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <h2>$220.99/<sub>Per Year</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a>Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
include_once("includes/widgets/lets_talk.php");
include_once("includes/footer.php");
?>