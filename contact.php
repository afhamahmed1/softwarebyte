<?php
include_once("includes/header.php")
?>


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="https://softwarebyte.co/">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-area sec-mar">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6">
                <div class="title black">
                    <span>Get In Touch</span>
                    <h2>contact us if you have more questions.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="office-info">
                    <div class="icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h4>Location</h4>
                    <p>3562 Snead Ct, , Sugar Land, TX, United States, Texas</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="office-info">
                    <div class="icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h4>Phone</h4>
                    <a href="tel:+12105510838">+1 210-551-0838</a>

                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="office-info">
                    <div class="icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <a><span>hr@softwarebyte.co</span></a>

                </div>
            </div>
        </div>
    </div>
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="contact-form">
                        <h3>Have Any Questions</h3>
                        <form id="contact-form" action="check/code.php" method="POST">
                            <div class="row">
                                <div class="col-xl-6">
                                    <input required type="text" name="name" placeholder="Enter your name">
                                </div>
                                <div class="col-xl-6">
                                    <input required type="email" name="email" placeholder="Enter your email">
                                </div>

                                <div class="col-xl-6">
                                    <input required type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-xl-6">
                                    <input required class="form-control" type="tel" name="phone" id="number">
                                </div>
                                <div class="col-12">
                                    <textarea required name="message" cols="30" rows="10" placeholder="Your message"></textarea>
                                </div>
                                <!-- <div required class="col-12 g-recaptcha" data-sitekey="6LeTl6khAAAAAGEefkC_GB_zLI6v6WMChdNIJkm2"> -->

                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" name="messages">Send Message</button>
                            </div>
                            <p class="form-message"></p>
                    </div>
                    </form>
                    <!-- <script>
                            function onSubmit(token) {
                                document.getElementById("contact-form").submit();
                            }
                        </script>
                        <script>
                            function onClick(e) {
                                e.preventDefault();
                                grecaptcha.ready(function() {
                                    grecaptcha.execute('6LeTl6khAAAAAGEefkC_GB_zLI6v6WMChdNIJkm2', {
                                        action: 'submit'
                                    }).then(function(token) {

                                    });
                                });
                            }
                        </script> -->
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3470.178908033534!2d-95.62907068473442!3d29.56939738205751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640e418fc64801b%3A0x9411a19850ce0db!2s3562%20Snead%20Ct%2C%20Sugar%20Land%2C%20TX%2077479%2C%20USA!5e0!3m2!1sen!2s!4v1663842023079!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php
include_once("includes/widgets/lets_talk.php");
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/intlTelInput.min.js"></script>
<script>
    var input = document.querySelector("#number");
    intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                success(countryCode);
            });
        },
        utilsScript: "assets/js/utils.js"
    });
</script>




<?php

include_once("includes/footer.php");
?>