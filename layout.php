<?php include('seo.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageMeta['title']; ?></title>
    <meta name="description" content="<?= $pageMeta['description']; ?>">
    <meta name="keywords" content="<?= $pageMeta['keywords']; ?>">
    <meta name="robots" content="<?= $pageMeta['robots']; ?>">
    <link rel="canonical" href="<?= $pageMeta['canonical']; ?>">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/image/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/image/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/image/favicon/android-chrome-192x192.png">
    <link rel="manifest" href="./assets/image/favicon/site.webmanifest">

    <!-- Theme Settings Js -->
    <script src="./assets/js/theme-script.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

    <!-- Iconsax CSS-->
    <link rel="stylesheet" href="assets/css/iconsax.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="./assets/css/feather.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="./assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

    <!-- Wow CSS -->
    <link rel="stylesheet" href="./assets/plugins/wow/css/animate.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="./assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="stylesheet" href="./assets/css/svc-services-dropdown.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>

<body class="theme-9">
    <a
        href="../../cdn-cgi/content/index__q_id_4V1cgj242DcvITJJ8lJ57rHt6eVjKWI73xq4NddJsAQ_1787115246_6967006_1_2_1_1_gwZSPbpgi3fo6uZkLZMUGrtPNc8yVOuK81EZ3EsY_vlKEoB8CJD58RIraWqAdgTd.html"
        aria-hidden="true" rel="nofollow noopener" style="display: none !important; visibility: hidden !important"></a>


    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Theme -->
        <div class="header-theme header-theme-two d-none">
            <button type="button" id="dark-mode-toggle" class="theme-toggle moon" aria-label="dark mode">
                <i class="isax isax-moon5"></i>
            </button>
            <button type="button" id="light-mode-toggle" class="theme-toggle sun" aria-label="light mode">
                <i class="isax isax-sun-15"></i>
            </button>
        </div>

        <?php require_once("include/header.php"); ?>
        <?= $content ?? ''; ?>
        <?php require_once('include/footer.php') ?>
        <!-- Cursor -->
        <div class="mouse-cursor cursor-outer d-none"></div>
        <div class="mouse-cursor cursor-inner d-none"></div>
        <!-- /Cursor -->


        <div class="contact-dock">
            <a href="tel:+919910169317" class="dock-btn call" aria-label="Call">
                <i class="bi bi-telephone-fill"></i>
            </a>

            <a href="https://wa.me/919910169317" target="_blank" class="dock-btn whatsapp" aria-label="WhatsApp">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>

    </div>
    <!-- /Main Wrapper -->

    <!-- ScrollToTop -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>
    <!-- /ScrollToTop -->

    <!-- jQuery -->
    <script src="./assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="./assets/js/feather.min.js"></script>
    <script src="./assets/js/svc-services-dropdown.js"></script>

    <!-- Slick JS -->
    <script src="./assets/js/slick.js"></script>

    <!-- counterup JS -->
    <script src="./assets/js/jquery.waypoints.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>

    <!-- Wow JS -->
    <script src="./assets/plugins/wow/js/wow.min.js"></script>

    <!-- BacktoTop JS -->
    <script src="./assets/js/backToTop.js"></script>

    <!-- Fancybox JS -->
    <script src="./assets/plugins/fancybox/jquery.fancybox.min.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/script.min.js"></script>

    <script>
        document.getElementById("whatsappForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const subject = document.getElementById("subject").value.trim();
            const message = document.getElementById("message").value.trim();

            const whatsappNumber = "919910169317"; // Replace with your WhatsApp number

            const text =
                `*New Contact Form Enquiry - HOK Aesthetics*

                 *Name:* ${name}
                 *Email:* ${email}
                 *Phone:* ${phone}
                 *Subject:* ${subject}
                
                 *Message:*
                ${message}`;

                const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;
                window.open(url, "_blank");
        });
    </script>


</body>

</html>