<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
    include_once("functions/myfunctions.php");
    $path_parts  = pathinfo($_SERVER['SCRIPT_NAME']);


    if ($path_parts['filename'] == "index") {
    ?>
        <meta name="title" content="Home Page" />
        <meta name="description" content="Software Byte is a full-service information technology firm comprised of engineers, designers, and developers. Mobile app development, web development, bespoke software solutions, and much more are available in the United States." />
    <?php
    } else if ($path_parts['filename'] == "about") {
    ?>
        <meta name="title" content="About Us" />
        <meta name="description" content="Software Byte is a renowned digital consultancy and innovation organization that assists businesses and brands in their digital transformation." />
    <?php
    } else if ($path_parts['filename'] == ("services")) {
    ?>
        <meta name="title" content="Services" />
        <meta name="description" content="Software Byte is a digital marketing agency based in the United States. Graphic design, web design, research, online marketing, and marketing and much more are all part of our digital marketing services." />
        <?php
    } else if ($path_parts['filename'] == "project" or $path_parts['filename'] == "service-details") {

        if (isset($_GET['category_id'])) {
            $id = $_GET['category_id'];

            $data = mysqli_fetch_assoc(getById('categories', $id));
        ?>

            <meta name="title" content="<?= $data['name'] ?>" />
            <meta name="description" content="<?= $data['description'] ?>" />
        <?php
        } else if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = mysqli_fetch_assoc(getById('services', $id));
        ?>

            <meta name="title" content="<?= $data['meta_title'] ?>" />
            <meta name="description" content="<?= $data['meta_description'] ?>" />
        <?php
        }
    } else if ($path_parts['filename'] == ("project2")) {
        ?>
        <meta name="title" content="Projects" />
        <meta name="description" content="View our work, which ranges from website design to website development. Many of our recent projects are illustrated and described here." />
    <?php
    } else if ($path_parts['filename'] == ("contact")) {
    ?>
        <meta name="title" content="Contact Us" />
        <meta name="description" content="Contact Software Byte for information on Website Development, eCommerce, Graphic Design, and SEO, among other things. From our locations in Texas, we service clients all around the country." />
    <?php
    } else if ($path_parts['filename'] == ("blog")) {
    ?>
        <meta name="title" content="Blogs" />
        <meta name="description" content="Software Byte's blog is a source for digital marketing tactics, Wordpress suggestions, SEO, PPC, graphic design, and social networking." />
    <?php
    } else if ($path_parts['filename'] == ("blog_details")) {
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(getById('blogs', $id));
    ?>

        <meta name="title" content="<?= $data['meta_title'] ?>" />
        <meta name="description" content="<?= $data['meta_description'] ?>" />
    <?php
    } else {
    ?>
        <meta name="title" content="<?= $path_parts['filename']  ?>" />
    <?php
    }
    ?>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" />

    <link href="assets/css/all.min.css" rel="stylesheet" />

    <link href="assets/css/fontawesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <link rel="stylesheet" href="assets/css/lightbox.min.css" />

    <link rel="stylesheet" href="assets/css/nice-select.css" />

    <link rel="stylesheet" href="assets/css/jQuery-plugin-progressbar.css" />

    <link rel="stylesheet" href="assets/css/barfiller.css" />

    <link rel="stylesheet" href="assets/css/magnific-popup.css" />


    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="assets/css/intlTelInput.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NERVFX2SN0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NERVFX2SN0');
    </script>




    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Software Byte - Digitalize your world</title>
    <meta name="google-site-verification" content="UM9gZYo6KnVLAHyVN6rXRb7msUYuE07QyWBhPcTu0HI" />
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <div class="preloader_area_wrap">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <div class="get_a_quote">


        <div id="popup" style="overflow-y:hidden">
            <div class="section1">
                <div>
                    <h3 class="text-white px-5 text-left">Send Us a Message</h3>
                    <form id="form" action="check/code.php" method="POST">
                        <div class="px-4 row sec1">
                            <div class="col-md-6 input">
                                <input required type="text " class="input_field text-white" name="first_name" placeholder="First name">
                            </div>
                            <div class="col-md-6 input">
                                <input required type="text " class="input_field text-white" name="last_name" placeholder="Last name">
                            </div>
                            <div class="col-md-6 input">
                                <input required type="email" class="input_field text-white" name="email" placeholder="Enter your email">
                            </div>
                            <div class="col-md-6 input">
                                <input required type="tel" class="input_field text-white" name="phone" placeholder="Enter Phone No.">
                            </div>
                            <div class="col-md-12 mt-4">

                                <select required class="input_field text-white col-12" name="service" id="">
                                    <option disabled selected style="color:black">Select Service</option>
                                    <?php
                                    $service_category = mysqli_fetch_all(getBySection('categories', 'service'));
                                    foreach ($service_category as $service) {
                                    ?>
                                        <option style="color:black" value="<?= $service[0] ?>"><?= $service[1] ?></option>

                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="input">
                                <textarea required name="message" class="input_field text-white rounded-0" id="message" cols="80" rows="10" placeholder="Enter message..."></textarea>
                            </div>

                            <!-- <div required class="col-12 g-recaptcha" data-sitekey="6LeTl6khAAAAAGEefkC_GB_zLI6v6WMChdNIJkm2"> -->

                        </div>
                        <div class="col-12 mt-2">
                            <button class="form-button" type="submit" name="get_a_quote">Send Message</button>
                        </div>
                        <input type="hidden" name="url" value="<?= basename($_SERVER['REQUEST_URI']); ?>">
                        <p class="form-message"></p>

                    </form>
                </div>
            </div>
            <div class="section2 px-5" style="text-align:left">
                <div class="section2-heading">
                    <h3>Contact Us<div></div>
                    </h3>

                </div>
                <p>We're open to suggestion or just to have a chat</p>
                <div class="px-5">
                    <div class="d-flex pt-3">
                        <i class="fa fa-location-arrow form-icon" aria-hidden="true"></i>
                        <span><b>Address:</b> 3562 Snead Ct, Sugar Land, TX 77479</span>
                    </div>
                    <div class="d-flex pt-5">
                        <i class="fa fa-phone form-icon" aria-hidden="true"></i>

                        <span><b>Phone:</b> <br> +1 (210) 551-0838</span>
                    </div>
                    <div class="d-flex pt-5">
                        <i class="fa fa-envelope form-icon" aria-hidden="true"></i>

                        <span><b>Email:</b> <br> hrsoftwarebyte@gmail.com</span>
                    </div>
                    <div class="d-flex pt-5 ">
                        <i class="fa fa-globe form-icon" aria-hidden="true"></i>
                        <span><b>Website:</b> <br> softwarebyte.co</span>
                    </div>
                </div>
            </div>
        </div>
        <style>

        </style>



    </div>

    <div class="main">
        <header class="position_top header-layout3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-2">
                        <div class="logo">
                            <a href="https://softwarebyte.co/"><img src="assets/img/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col col-sm-5 col-md-5 col-lg-4 col-xl-7 text-end">
                        <nav class="main-nav layout3">
                            <div class="mobile-menu-logo">
                                <a href="https://softwarebyte.co/"><img src="assets/img/logo.png" alt="" /></a>
                            </div>
                            <ul>
                                <li class="has-child active">
                                    <a href="https://softwarebyte.co/">Home</a>

                                </li>
                                <li><a href="about-us">About us</a></li>
                                <li>
                                    <a href="services">Services</a>
                                    <i class="bi bi-chevron-down"></i>
                                    <ul class="sub-menu">
                                        <?php
                                        $table = getAll('services');
                                        $services = mysqli_fetch_all($table);
                                        foreach ($services as $item) {
                                            $category = mysqli_fetch_assoc(getById('categories', $item[9]));
                                            if ($category['name'] == $item[1]) {
                                        ?>
                                                <li><a href="service-details.php?id=<?= $item[0] ?>"><?= $item[1] ?></a></li>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </ul>

                                </li>
                                <li>
                                    <a href="projects">Projects</a>
                                    <i class="bi bi-chevron-down"></i>
                                    <ul class="sub-menu">
                                        <?php
                                        $categories = getBySection('categories', 'project');
                                        $categories = mysqli_fetch_all($categories);
                                        foreach ($categories as $item) {

                                        ?>
                                            <li><a href="project.php?category_id=<?= $item[0] ?>"><?= $item[1] ?></a></li>
                                        <?php

                                        }
                                        ?>

                                    </ul>
                                </li>
                                <li>
                                    <a href="blogs">Blogs</a>

                                </li>

                                <li><a href="contact-us">Contact us</a></li>
                            </ul>
                            <div class="get-quate dn">
                                <div class="cmn-btn-layout3">
                                    <a class="popup-trigger">Get a Quote</a>

                                </div>
                            </div>
                        </nav>
                        <div class="mobile-menu">
                            <a href="javascript:void(0)" class="cross-btn">
                                <span class="cross-top"></span>
                                <span class="cross-middle"></span>
                                <span class="cross-bottom"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-5 col-xl-3 text-end">
                        <div class="header-right">
                            <ul class="social-media-layout3">
                                <li><a href="https://www.facebook.com/Softwarebyte.co"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/software-byte/"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/softwarebyte1/"><i class="fab fa-instagram"></i></a></li>

                            </ul>
                            <div class="cmn-btn-layout3">
                                <a class="popup-trigger">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>