<link rel="stylesheet" href="assets/css/aos.css" />

<style>
  section {
    padding: 90px 0 0 0;
  }

  section#home,
  section#services {
    padding: 50px;
  }

  .services-box:hover h6 {
    color: red !important;
    scale: 1.15;
    transition: scale .5s ease-in-out;
  }
</style>


<div class="page-body-wrapper">
  <section id="home" class="home">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-banner">
            <div class="d-sm-flex justify-content-between">
              <div data-aos="zoom-in-up">
                <div class="banner-title">

                  <h4>Web Designs That Push the Creative Limits</h4>
                </div>
                <p class="mt-3">
                  Software Byte appreciates your high standards and thrives
                  on finding creative solutions to satisfy them.<br />
                  As an industry leader in web design and development, we
                  value your input and work ethic and <br />always aim to
                  provide the best possible results.
                </p>
              </div>
              <div class="mt-5 mt-lg-0">
                <img src="includes/widgets/web_development/images/web.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="our-services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h5 class="text-dark">We’re offering</h5>
          <h3 class="font-weight-medium text-dark mb-5">
            E-Commerce Development Services
          </h3>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <?php
        $ecommerceTagid = "20";
        $ecommerceServices = mysqli_fetch_all(getByColumn('service_tags', 'tag_id', $ecommerceTagid));

        foreach ($ecommerceServices as $ecommerceService) {
          $service = mysqli_fetch_assoc(getById('services', $ecommerceService[2]));
        ?>
          <div class="col-sm-2 text-center text-lg-left">
            <a href="service-details.php?id=<?= $service["id"] ?>">
              <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="uploads/<?= $service["icon"] ?>" alt="<?= $service["alt_text"] ?>" data-aos="zoom-in" style="width: 50px; height: 50px" />
                <h6 class="text-dark mb-3 mt-4 font-weight-medium">
                  <?= $service["title"] ?>
                </h6>
              </div>
            </a>
          </div>
        <?php
        }
        ?>

      </div>

      <div class="row mt-5">
        <div class="col-sm-12">
          <h3 class="font-weight-medium text-dark mb-5">
            CMS/Custom Website Development Services
          </h3>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <?php
        $ecommerceTagid = "21";
        $ecommerceServices = mysqli_fetch_all(getByColumn('service_tags', 'tag_id', $ecommerceTagid));

        foreach ($ecommerceServices as $ecommerceService) {
          $service = mysqli_fetch_assoc(getById('services', $ecommerceService[2]));
        ?>
          <div class="col-sm-2 text-center text-lg-left">
            <a href="service-details.php?id=<?= $service["id"] ?>">
              <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="uploads/<?= $service["icon"] ?>" alt="<?= $service["alt_text"] ?>" data-aos="zoom-in" style="width: 50px; height: 50px" />
                <h6 class="text-dark mb-3 mt-4 font-weight-medium">
                  <?= $service["title"] ?>
                </h6>
              </div>
            </a>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </section>
  <section class="our-process" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" data-aos="fade-up">
          <h3 class="font-weight-medium text-dark">
            E-Commerce Sites That Adhere to Internationally Accepted Norms
          </h3>

          <p class="font-weight-medium mb-4">
            We are a web development firm that is familiar with the
            requirements of online commerce and shares your insistence on
            nothing less than absolute perfection. Software Byte creates a
            unique online store for you, complete with state-of-the-art
            features and an intuitive interface. When it comes to web
            development, we're the best in the business.
          </p>
        </div>
        <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="includes/widgets/web_development/images/ecommercedesign.gif" alt="idea" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <section class="our-process" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="includes/widgets/web_development/images/web-design-gif--final.gif" alt="idea" class="img-fluid" />
        </div>
        <div class="col-sm-6" data-aos="fade-up">
          <h3 class="font-weight-medium text-dark">
            When It Comes to Web Design, We Shape Our Work to Fit Your
            Company's Image
          </h3>

          <p class="font-weight-medium mb-4">
            With Software Byte, however, the impossible becomes possible.
            All our efforts are focused on bringing your wildest dreams to
            life via exceptional custom website creation, and we do this by
            employing the most creative and forward-thinking brains in the
            industry. We like nothing more than bringing your vision to life
            in the form of a world-class Brand that reflects your
            personality and values.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="our-process" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" data-aos="fade-up">
          <h3 class="font-weight-medium text-dark">
            We Provide Elegant Mobile Web Design & Development Services
          </h3>

          <p class="font-weight-medium mb-4">
            The goal of Software Byte is to shed light on the unexpected
            pleasures of browsing the web from a mobile device. A wonderful
            combination of rare and expensive materials is needed, as well
            as long-lost expertise. As a full-service web design company, we
            focus on creating designs that are enjoyable to use for both you
            and your audience.
          </p>
        </div>
        <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="includes/widgets/web_development/images/Give-Jobs-Case-Study-Animation.gif" alt="idea" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>


</div>



<script src="assets/js/aos.js"></script>