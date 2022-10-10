<link href="assets/css/digital-marketing.css" rel="stylesheet" />




<!-- slider section -->
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="img-box">
                <img src="includes/widgets/digital_media_marketing/images/digital_marketing_banner.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <h1 style="color: black;">
                  Digital Marketing Experts
                </h1>
                <p style="color: black;">
                  We provide expert digital marketing services to help you get the attention you deserve in the digital world. We're committed to providing services that are reflective of our conviction that a company's future lies in the digital realm. We connect your business with consumers at just the right moment, on just the right device. Many of our clients have benefited from our expertise and award-winning solutions, which have allowed them to better connect with and serve their consumers. To the same end, we want to assist you.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</section>
<!-- end slider section -->
</div>

<!-- service section -->
<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Our Services
      </h2>
      <p>
        We've consistently helped our customers improve their online visibility and communication via the use of our tried-and-true digital marketing strategies. We strive to increase your online visibility, traffic, leads, and sales through a variety of digital media, whether you're just starting started or have been doing this for years. With our digital marketing services, you may accomplish any of the following.
      </p>
    </div>
    <div class="row">
      <?php
      $itemsId = "22";
      $items = mysqli_fetch_all(getByColumn('service_tags', 'tag_id', $itemsId));
      $count = 0;
      foreach ($items as $item) {
        $service = mysqli_fetch_assoc(getById('services', $item[2]));

      ?>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="uploads/<?= $service["icon"] ?>" alt="">
            </div>
            <div class="detail-box">
              <h5>
                <?= $service["title"] ?>
              </h5>
              <p>
                <?= $service["meta_description"] ?>
              </p>
              <a href="service-details.php?id=<?= $service["id"] ?>">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

    </div>

  </div>
</section>
<!-- end service section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="text-align: left;">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About Us
            </h2>
            <h3>We're A Dedicated Team with Years of Industry Experience</h3>
          </div>
          <p class="text-white text-left">
            Each member of our team is an expert in both digital marketing and interpersonal communication. We believe that the future of marketing and communication is in the digital realm, and as such, we are fully committed to this space. Our ability to provide you with excellent digital marketing services is made possible by the combination of our enthusiasm and expertise in the field. The following are the primary goals of our digital marketing services for your online presence.
          </p>
          <div class="container  ">
            <div class="row">
              <div class="col-md-6">
                <h4>Attract</h4>
                <p class="text-white text-left">Use audience-specific messaging on digital media to draw people to your digital assets.</p>
                <h4>Convert</h4>
                <p class="text-white text-left">Targeted messaging may help you turn website visits into interested customers and purchases.</p>
              </div>
              <div class="col-md-6">
                <h4>Analyze</h4>
                <p class="text-white text-left">You may increase sales by learning from customer behavior on your websites and acting on that knowledge.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="includes/widgets/digital_media_marketing/images/about-img.png" alt="">
        </div>
      </div>

    </div>
  </div>
</section>
</div>