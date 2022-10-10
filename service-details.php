<?php
include_once("includes/header.php")
?>
<link href="assets/css/widgets-style.css" rel="stylesheet" />

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Service details</h1>
                    <ul>
                        <li><a href="https://softwarebyte.co/">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

include_once("functions/myfunctions.php");

$serviceslug = $_GET['slug'];
$service = getBySlug('services', $serviceslug);
$service = mysqli_fetch_assoc($service);

if ($service) {
?>
    <section class="service-details" style="padding: 90px 0 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 or2">
                    <div class="signle-service-details">
                        <h3><img src="assets/img/icons/service-details-icon.svg" alt=""><?= $service['title'] ?></h3>

                    </div>
                </div>

            </div>
            <div class="single-service-work-process">
                <?= $service['content'] ?>
            </div>
        </div>
    </section>

<?php
}
?>

<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    switch ($id) {
        case 2:
            include_once("includes/widgets/web_development/web_development.php");
            break;
        case 5:
            include_once("includes/widgets/digital_media_marketing/digital_media_marketing.php");
            break;

        case 6:
            include_once("includes/widgets/graphic_designing_service/graphic_designing.php");
            break;
        case 9:
            include_once("includes/widgets/app_development/app_development.php");
            break;

        case 18:
            include_once("includes/widgets/template/services/web_development/php_dev.php");
            break;
        case 16:
            include_once("includes/widgets/template/services/web_development/wordpress.php");
            break;

        case 20:
            include_once("includes/widgets/template/services/web_development/laravel.php");
            break;
        case 19:
            include_once("includes/widgets/template/services/web_development/cake_php.php");
            break;
        case 17:
            include_once("includes/widgets/template/services/web_development/asp_net.php");
            break;
        case 10:
            include_once("includes/widgets/template/services/web_development/drupal.php");
            break;
        case 11:
            include_once("includes/widgets/template/services/web_development/woo_commerce.php");
            break;

        case 12:
            include_once("includes/widgets/template/services/web_development/magento.php");
            break;

        case 13:
            include_once("includes/widgets/template/services/web_development/open_cart.php");
            break;
        case 14:
            include_once("includes/widgets/template/services/web_development/prestashop.php");
            break;
        case 15:
            include_once("includes/widgets/template/services/web_development/shopify.php");
            break;

        case 21:
            include_once("includes/widgets/template/services/digital_media_marketing/seo.php");
            break;

        case 22:
            include_once("includes/widgets/template/services/digital_media_marketing/ppc.php");
            break;

        case 23:
            include_once("includes/widgets/template/services/digital_media_marketing/smm.php");
            break;

        case 24:
            include_once("includes/widgets/template/services/digital_media_marketing/content-marketing.php");
            break;
        case 32:
            include_once("includes/widgets/template/services/application_development/iso_development.php");
            break;
        case 34:
            include_once("includes/widgets/template/services/application_development/android_development.php");
            break;

        case 33:
            include_once("includes/widgets/template/services/application_development/hybrid_development.php");
            break;
        case 36:
            include_once("includes/widgets/template/services/application_development/flutter_development.php");
            break;
        case 37:
            include_once("includes/widgets/template/services/application_development/react_native_development.php");
            break;

        case 35:
            include_once("includes/widgets/template/services/application_development/swift_development.php");
            break;
        case 29:
            include_once("includes/widgets/template/services/graphic_designing/website_mockups.php");
            break;
        case 30:
            include_once("includes/widgets/template/services/graphic_designing/app_mockups.php");
            break;
        case 25:
            include_once("includes/widgets/template/services/graphic_designing/logo_desiging.php");
            break;
        case 26:
            include_once("includes/widgets/template/services/graphic_designing/brochures_and_flyers.php");
            break;
        case 27:
            include_once("includes/widgets/template/services/graphic_designing/print_and_layout.php");
            break;
        case 28:
            include_once("includes/widgets/template/services/graphic_designing/2d_and_3d_animations.php");
            break;
    }
}
?>
<?php
include_once("includes/widgets/lets_talk.php");
include_once("includes/footer.php");
?>