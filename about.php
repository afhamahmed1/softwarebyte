<?php
include_once("includes/header.php");
include_once('functions/myfunctions.php');
?>


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>About us</h1>
                    <ul>
                        <li><a href="https://softwarebyte.co/">Home</a></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-area sec-mar">
    <div class="container">
        <div class="out-story">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="story-left">
                        <div class="office-group-img">
                            <img src="assets/img/story.png" alt="">
                            <div class="cto-message-wrapper">
                                <div class="cto-message">
                                    <p>Our objective is to become a major IT online solutions provider. We work with clients to meet their business objectives. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="story-right">
                        <div class="title black">
                            <span>Inside Story</span>
                            <h2 class="mb-15">We are creative Agency that creates beautiful.</h2>
                        </div>
                        <p>We work hard to comprehend the problems the industry is currently dealing with and then utilize our sharp business judgment to come up with unique and ground-breaking solutions. Our goal is to deliver the high quality that is integrated with cutting-edge methods created by our tech professionals. We stand out in the market due to our presence there for more than a decade and the fantastic clientele we serve. We support customization that meets your company's demands. We maximize the utilization of technology combined with human potential with the main objective of benefiting the world.</p>
                        <div class="story-skills">
                            <div class="story-skill">
                                <div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
                                <span>Idea & Research</span>
                            </div>
                            <div class="story-skill">
                                <div class="progress-bar-circle" data-percent="95" data-duration="1000"></div>
                                <span>Wirfirm & Design</span>
                            </div>
                            <div class="story-skill">
                                <div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
                                <span>Developing & Launch</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="about-left">
                    <div class="title black">
                        <span>About us</span>
                        <h2 class="mb-15">Direction with our company.</h2>
                    </div>
                    <p>Our vision is to advance from our existing position in the market and become a top provider of web solutions in the IT industry. We pledge to assist our clients in attaining their business objectives because we understand that their success is also our success. We value accuracy and the highest level of quality in our work. We wish to be recognized as the IT industry's most dependable, creative, and user-friendly software service provider.</p>
                    <div class="our-mission">
                        <div class="msn-icon">
                            <i><img src="assets/img/icons/mission-icon.png" alt=""></i>
                        </div>
                        <div class="msn-content">
                            <h5>Our Mission</h5>
                            <p>Focusing on the professional development of its human resource team, Software Byte makes a conscious effort to find and keep the top talent available in the market today. </p>
                        </div>

                    </div>
                   
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="about-right">
                    <div class="group-images">
                        <img src="assets/img/about-bottom.jpg" alt="">
                        <div class="about-top">
                            <img src="assets/img/about-top.png" alt="">
                        </div>
                        <div class="about-skills">
                            <div class="signle-skill">
                                <div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
                                <div class="skill-content">
                                    <h6>web</h6>
                                    <p>Clean Design</p>
                                </div>
                            </div>
                            <div class="signle-skill">
                                <div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
                                <div class="skill-content">
                                    <h6>App</h6>
                                    <p>Developing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-count">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-1.png" alt=""></i>
                        <div class="counter">
                            <span class="odometer">150</span><sup>+</sup>
                        </div>
                        <p>Project Completed</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-2.png" alt=""></i>
                        <div class="counter">
                            <span class="odometer">250</span><sup>+</sup>
                        </div>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-3.png" alt=""></i>
                        <div class="counter">
                            <span class="odometer">150</span><sup>+</sup>
                        </div>
                        <p>Expert Teams</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-4.png" alt=""></i>
                        <div class="counter">
                            <span class="odometer">28</span><sup>+</sup>
                        </div>
                        <p>Win Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <?php

                        $testimonial = getAll('testimonials');
                        $testimonial = mysqli_fetch_all($testimonial);
                        foreach ($testimonial as $item) {
                        ?>

                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="quote">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="uploads/<?= $item[5] ?>" alt="">
                                        </div>
                                        <div class="client-details">
                                            <h4><?= $item[1] ?></h4>
                                            <span><?= $item[3] ?></span>
                                        </div>
                                    </div>
                                    <p><i class="fas fa-quote-left"></i> <?= $item[2] ?>
                                        <i class="fas fa-quote-right"></i>
                                    </p>
                                    <div class="rating">
                                        <?php
                                        for ($i = 0; $i < $item[4]; $i++) {
                                        ?>
                                            <i class="fas fa-star"></i>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-us sec-mar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="title black">
                    <span>Why Choose Finibus</span>
                    <h2 class="mb-15">success is just around the next online corner</h2>
                </div>
                <div class="video-demo">
                    <img src="assets/img/play-video.jpg" alt="">
                    <div class="play-btn">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i> Play now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="valuable-skills">
                    <img src="assets/img/valuable-skill.jpg" alt="">
                    <div class="signle-bar">
                        <h6>Web Design</h6>
                        <div id="bar1" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6>App Development</h6>
                        <div id="bar2" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="98"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6>Backend</h6>
                        <div id="bar3" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6>Video Animtion</h6>
                        <div id="bar4" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="85"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-news sec-mar">
    <div class="container">
        <div class="row gx-4">
            <?php
            $blog = getAll('blogs');
            $blog = mysqli_fetch_all($blog);
            $count = 0;
            foreach ($blog as $item) {
                $tag = section_name('blogs', 'tags', 'tag_id', $item[10]);
                $tag = mysqli_fetch_assoc($tag);
                if ($count == 2) {
                    break;
                }
            ?>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="signle-news">
                        <div class="tag">
                            <a href="#"><?= $tag['name'] ?></a>
                        </div>
                        <div class="post-img">
                            <a href="blog_details.php?id=<?= $item[0] ?>"><img src="uploads/<?= $item[2] ?>" alt=""></a>
                        </div>
                        <div class="news-content">

                            <h3 style="padding-top:20px;"><a href="blog_details.php?id=<?= $item[0] ?>"><?= $item[1] ?></a>
                            </h3>
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
                $count++;
            }
            ?>



            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="title black">
                    <span>Blog</span>
                    <h2>Latest news And Article modern design.</h2>
                    <div class="cmn-btn">
                        <a href="blogs">View All Blog</a>
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