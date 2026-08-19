<?php include('seo.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageMeta['title']; ?></title>
    <meta name="description" content="<?= $pageMeta['description']; ?>">
    <meta name="keywords" content="<?= $pageMeta['keywords']; ?>">
    <meta name="robots" content="<?= $pageMeta['robots']; ?>">
    <link rel="canonical" href="<?= $pageMeta['canonical']; ?>">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="assets/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicons/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="assets/favicons/site.webmanifest">


    <!-- fonts -->
    <!-- Google Fonts: Urbanist -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/vendors/delogis-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/delogis-icons-two/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/alagambe-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/delogis-color-2.css">
</head>

<body>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <?php require_once("include/header.php"); ?>
        <?= $content ?? ''; ?>
        <?php require_once('include/footer.php') ?>
    </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image">
                    <img src="assets/images/logo/logo.png" width="135" class="bg-white p-1 rounded-2"
                        alt="Logo"></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <!-- <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@aradhyahealthcentre.com">
                        info@aradhyahealthcentre.com
                    </a>
                </li> -->
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+917342530766">
                        +91 73425 30766
                    </a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+919109530766">
                        +91 91095 30766
                    </a>
                </li>
            </ul>
            <!-- <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div> -->
        </div>
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>

    <!-- template js -->
    <script src="assets/js/delogis.js"></script>
    <script>
        function sendAppointment() {

            var name = document.getElementById('name').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;
            var date = document.getElementById('date').value;
            var subject = document.getElementById('subject').value;
            var message =
                `*New Appointment Request*

            Name : ${name}
            Phone : ${phone}
            Email : ${email}
            Preferred Date : ${date}
            Subject : ${subject}`;
            var url = "https://wa.me/917342530766?text=" + encodeURIComponent(message);
            window.open(url, "_blank");

        }

        function sendContact() {

            var name = document.getElementById("cname").value;
            var email = document.getElementById("cemail").value;
            var phone = document.getElementById("cphone").value;
            var subject = document.getElementById("csubject").value;
            var message = document.getElementById("cmessage").value;
            var text =
                `*New Contact Enquiry*

            Name : ${name}
            Phone : ${phone}
            Email : ${email}
            Subject : ${subject}

            Message :
            ${message}`;
            var url = "https://wa.me/917342530766?text=" + encodeURIComponent(text);
            window.open(url, "_blank");
        }
    </script>
</body>

</html>