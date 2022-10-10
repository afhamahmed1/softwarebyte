<footer class="footer-layout3">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget layout3">
                    <div class="footer-logo">
                        <a href="https://softwarebyte.co/"><img src="assets/img/logo.png" alt="" /></a>
                    </div>
                    <a href="tell:info@support.com">Email :
                        <span href="mailto:hrsoftwarebyte@gmail.com">hrsoftwarebyte@gmail.com</span></a>
                    <p>
                        Address : 3562 Snead Ct, Sugar Land, TX 77479
                    </p>
                    <a href="tel:+1210551-0838">Phone : +1 (210) 551-0838</a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget layout3">
                    <h4>Our Services</h4>
                    <ul class="footer-menu">
                        <?php
                        include_once("functions/myfunctions.php");
                        $services = getAll('services');
                        $services = mysqli_fetch_all($services);
                        foreach ($services as $item) {
                            $category = mysqli_fetch_assoc(getById('categories', $item[9]));

                            if ($category['name'] == $item[1]) {
                        ?>
                                <li>
                                    <a href="service-details.php?id=<?= $item[0] ?>"><?= $item[1] ?></a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                        <li>
                            <a href="services">View More</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget layout3">
                    <h4>Company</h4>
                    <ul class="footer-menu">
                        <li><a href="about-us">About Us</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="projects">Project</a></li>
                        <li><a href="blogs">Blog</a></li>
                        <li><a href="contact-us">Career</a></li>
                        <li><a href="services#pricing_plan">Pricing Plan</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget layout3">
                    <h4>Get The Updates</h4>
                    <div class="footer-subscribe">
                        <p>
                            Sign up to receive the best offers on promotion and
                            coupons.
                        </p>
                        <form id="newsletter" method="POST">
                            <input required type="email" name="email" placeholder="Type your Email :" />

                            <button type="submit" class="form-control btn-secondary " style="margin-top:10px; 
                            color:white;background-color:#124273" name="newsletter">Submit</button>

                        </form>

                        <script>
                            jQuery('#newsletter').on('submit', function(e) {

                                e.preventDefault();
                                $.ajax({
                                    type: "post",
                                    url: "newsletter.php",
                                    data: jQuery("#newsletter").serialize(),

                                    success: function(result) {
                                        if (result == 200) {
                                            swal("Success!",
                                                "You have been subscribed to our newsletter.",
                                                "success");
                                        } else if (result == 404) {
                                            swal("error", "something Went wrong", "ok")
                                        } else if (result == 300) {
                                            swal("You are already subscribed to our newsletter")
                                        } else {
                                            swal("error", result, "ok")
                                        }
                                    }
                                });
                            });
                        </script>


                    </div>
                    <ul class="social-media-icons">
                        <li>
                            <a href="https://www.facebook.com/Softwarebyte.co"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/software-byte/"><i class="fab fa-linkedin"></i></a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/softwarebyte1/"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-4 col-xl-5">
                    <div class="copy-txt">
                        <span>Copyright 2022 <b>SoftwareByte</b>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-7">
                    <ul class="footer-bottom-menu">
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions">Terms of Use</a></li>
                        <li><a href="terms-and-conditions">Support Policy</a></li>
                        <li><a href="terms-and-conditions">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top">
    <span>Top<i class="bi bi-arrow-up"></i></span>
</div>
</div>

<script>
    let mini_descrp = document.getElementsByClassName('mini-description')

    for (let i = 0; i < mini_descrp.length; i++) {

        mini_descrp[i].innerText = mini_descrp[i].innerText.substr(0, 100) + "...";
    }
</script>


<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/swiper-bundle.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jQuery-plugin-progressbar.js"></script>

<script src="assets/js/jquery.barfiller.js"></script>

<script src="assets/js/waypoints.min.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/js/lightbox.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/isotope.pkgd.min.js"></script>

<script src="assets/js/masonry.pkgd.min.js"></script>

<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<script src="assets/js/custom.js"></script>

<script>
    const popupQuerySelector = "#popup";
    const popupEl = document.querySelector(popupQuerySelector);
    const popupBttn = document.getElementsByClassName("popup-trigger");
    const popupoverlay = document.getElementsByClassName('get_a_quote');
    console.log()

    for (let i = 0; i < popupBttn.length; i++) {

        popupBttn[i].addEventListener("click", () => {
            setTimeout(() => {
                if (!popupEl.classList.contains("show")) {
                    // Add class `show` to filterList element
                    popupEl.classList.add("show");
                    popupoverlay[0].style.backgroundColor = "rgba(0, 0, 0, 0.2)";
                    popupoverlay[0].style.zIndex = 9999
                }
            }, 250);
        });
    }


    document.addEventListener("click", (e) => {
        // Check if the filter list parent element exist
        const isClosest = e.target.closest(popupQuerySelector);

        // If `isClosest` equals falsy & popup has the class `show`
        // then hide the popup
        if (!isClosest && popupEl.classList.contains("show")) {
            popupEl.classList.remove("show");
            popupoverlay[0].style.backgroundColor = ""
            popupoverlay[0].style.zIndex = -1
        }
    });
</script>


</body>


</html>