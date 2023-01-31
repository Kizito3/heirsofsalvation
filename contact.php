<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include('header.php')
?>


<body>
<?php
    include('nav.php');

   ?>

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- contact page -->
    <div class="contact-form py-5">
        <div class="container py-lg-5 py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">Contact Us</h3>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque,
                            eaque ipsa quae ab illo inventore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto" style="max-width:1100px">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">Visit Us:</h5>
                                    <p>5th Avenue, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">Call Us:</h5>
                                    <a href="tel:+12 23456790">+12 23456790</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">Mail Us:</h5>
                                    <a href="mailto:info@example.com"> info@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form pt-5 mt-2">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="cont-form p-sm-5">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Your Name"
                                    class="contact-input" />
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone Number"
                                    class="contact-input" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email id"
                                    class="contact-input" required />
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject"
                                    class="contact-input" />
                            </div>
                        </div>
                        <textarea class="contact-textarea" name="w3lMessage" id="w3lMessage"
                            placeholder="Type your message here" required></textarea>
                        <div class="text-right">
                            <button class="btn btn-style-white btn-style-primary">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
            frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <!-- //contact page -->

    <?php
        include('footer.php');
    ?>

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>