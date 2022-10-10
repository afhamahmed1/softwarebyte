<link rel="stylesheet" href="assets/css/graphic-designing.css" />

<div class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-65">
                    <span>Service Provided</span>
                    <h3>Graphic Designing</h3>
                    <p>
                        Starting a company is the easy part, but keeping it going and
                        growing is where strategy and smart work come in. You need the
                        assistance of skilled designers to promote your company
                        successfully. You can count on Software Byte's graphic
                        designers, who are skilled veterans in the realm of producing
                        original materials for use in advertising and branding, to
                        provide the goods.
                    </p>
                </div>
            </div>
        </div>

        <div class="about_me">
            <div class="about_large_title d-none d-lg-block">About</div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="about_e_details">
                            <h3>Professional Graphic Design Solutions</h3>
                            <p>
                                A skilled graphic designer is an invaluable asset to any
                                organization. A professional logo may serve as a distinctive
                                symbol, while professionally designed marketing materials
                                and product packaging can help spread the word. And that's
                                when you need the services of a professional graphic
                                designer to come up with artwork that does more than simply
                                look good—it also conveys the character of your company.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_img">
                            <div class="color_pattern d-none d-lg-block">
                                <img src="includes/widgets/graphic_designing_service/img/color_grid.png" alt="" />
                            </div>
                            <div class="my_Pic">
                                <img src="includes/widgets/graphic_designing_service/img/main 2.gif" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $itemsId = "23";
            $items = mysqli_fetch_all(getByColumn('service_tags', 'tag_id', $itemsId));
            $count = 0;
            foreach ($items as $item) {
                $service = mysqli_fetch_assoc(getById('services', $item[2]));

            ?>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="uploads/<?= $service['icon'] ?>" alt="" style="width: 100px; height: 100px" />
                        </div>
                        <h3>
                            <?= $service['title'] ?>
                        </h3>
                        <p>
                            <?= $service['meta_description'] ?>
                        </p>
                        <div class="download_cv" style="margin-top: 20px">
                            <a class="boxed-btn3" href="service-details.php?id=<?= $service['id'] ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>