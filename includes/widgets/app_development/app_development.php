<!-- Iconfont CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />

<link rel="stylesheet" type="text/css" href="assets/css/slick.css" />



<!-- Main style CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/app_development.css" media="all" />





<!-- about section start -->
<section class="about-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>
                        Service for Mobile Development<span class="sec-title-border"><span></span><span></span><span></span></span>
                    </h2>
                    <p>
                        You may delight your users with feature rich and expressive IOS
                        and Android apps by using our mobile development services. We
                        can provide the best services on the market because of our
                        considerable experience dealing with all the main technologies.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $itemsId = "14";
            $items = mysqli_fetch_all(getByColumn('service_tags', 'tag_id', $itemsId));
            $count = 0;

            foreach ($items as $item) {
                $service = mysqli_fetch_assoc(getById('services', $item[2]));
                // print_r($service)
                if (!is_array($service)) {
                    continue;
                }
                if ($service["id"] == 9) {
                    continue;
                }

            ?>
                <div class="col-lg-4 col-md-6">
                    <a href="service-details.php?id=<?= $service['id'] ?>">
                        <div class="single-about-box">
                            <img src="uploads/<?= $service['image'] ?>" alt="<?= $service['alt_text'] ?>" style="width: 100px; height: 100px" />
                            <h4><?= $service['title'] ?></h4>
                            <p class="mb-4">
                                <?= $service['meta_description'] ?>
                            </p>
                            <a class="learn-more">Learn More</a>
                        </div>
                    </a>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- about section end -->
<!-- feature section start -->
<section class="feature-area ptb-90" id="feature">
    <div class="container">
        <div class="row flexbox-center">
            <div class="col-lg-4 my-4">
                <div class="single-feature-box text-lg-right text-center">
                    <ul>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-brush"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Unlimited Features</h4>
                                <p>Unlimited features implementation</p>
                            </div>

                        </li>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-computer"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Responsive Design</h4>
                                <p>Responsive design on all the mobile</p>
                            </div>

                        </li>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-law-document"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Well Documented</h4>
                                <p>Well organized documentation</p>
                            </div>

                        </li>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-heart-beat"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Full Free Chat</h4>
                                <p>Chatbot system integration</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature-box text-center">
                    <img src="includes/widgets/app_development/img/feature.png" alt="feature" />
                </div>
            </div>
            <div class="col-lg-4 my-4">
                <div class="single-feature-box text-lg-left text-center">
                    <ul>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-eye"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Retina ready</h4>
                                <p>updated with Retina-ready graphics</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-sun-alt"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>High Resolution</h4>
                                <p>Use high resolution images for the app</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-code-alt"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Clean Codes</h4>
                                <p>Well commented and organized code</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-box-icon">
                                <i class="icofont icofont-headphone-alt"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Helping Supports</h4>
                                <p>3 months free support</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature section end -->
<!-- showcase section start -->
<section class="showcase-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>
                        Mobile Application Development
                        <span class="sec-title-border"><span></span><span></span><span></span></span>
                    </h2>
                    <p>
                        Software Byte provides top-notch mobile app development
                        services, such as application management, integration, and
                        design. Our developers have the knowledge and years of
                        experience necessary to create solutions that satisfy market
                        demands and aid in corporate expansion. Our mobile developers
                        are at your service if you’re looking to harness mobile
                        technology for your business.
                    </p>
                </div>
            </div>
        </div>
        <div class="row flexbox-center">
            <div class="col-lg-6">
                <div class="single-showcase-box">
                    <h4>Our Services for Custom Mobile Development</h4>
                    <p>
                        We don't follow any strict guidelines but instead adopt a
                        flexible methodology to develop solutions that are adapted to
                        your unique business requirements. We concentrate on studying
                        your clients to comprehend their needs and develop a unique
                        strategy in response.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-showcase-box">
                    <img src="includes/widgets/app_development/img/showcase.png" alt="showcase" />
                </div>
            </div>
        </div>
        <div class="row flexbox-center">
            <div class="col-lg-6">
                <div class="single-showcase-box">
                    <img src="includes/widgets/app_development/img/showcase2.png" alt="showcase" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-showcase-box">
                    <ol>
                        <li>
                            We are experts at creating mobile applications for many
                            platforms using cutting-edge tools and tried-and-true methods.
                        </li>
                        <li>
                            Our specialists cover every phase of developing a mobile app,
                            including business research, UX/UI design, and more.
                        </li>
                        <li>
                            From concept to launch, we guarantee the highest quality
                            development services, and if necessary, we also offer
                            additional optimization and scale-up.
                        </li>
                        <li>
                            Our team of developers customizes their services to meet the
                            needs and objectives of your company. Your web presence can be
                            expanded with our assistance.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- showcase section end -->
<!-- screenshots section start -->
<section class="screenshots-area ptb-90" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>
                        Screenshot<span class="sec-title-border"><span></span><span></span><span></span></span>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="screenshot-wrap">
                    <div class="single-screenshot">
                        <img src="includes/widgets/app_development/img/screenshot/screenshot1.jpg" alt="screenshot" />
                    </div>
                    <div class="single-screenshot">
                        <img src="includes/widgets/app_development/img/screenshot/screenshot2.jpg" alt="screenshot" />
                    </div>
                    <div class="single-screenshot">
                        <img src="includes/widgets/app_development/img/screenshot/screenshot3.jpg" alt="screenshot" />
                    </div>
                    <div class="single-screenshot">
                        <img src="includes/widgets/app_development/img/screenshot/screenshot4.jpg" alt="screenshot" />
                    </div>
                    <div class="single-screenshot">
                        <img src="includes/widgets/app_development/img/screenshot/screenshot5.jpg" alt="screenshot" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- screenshots section end -->


<!-- Slick JS -->
<script src="assets/js/slick.min.js"></script>

<script>
    $(".screenshot-wrap").slick({
        autoplay: true,
        dots: true,
        autoplaySpeed: 1000,
        slidesToShow: 3,
        centerPadding: "20%",
        centerMode: true,
        prevArrow: "",
        nextArrow: "",
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    centerPadding: "33.3%",
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    centerPadding: "0",
                },
            },
        ],
    });
</script>