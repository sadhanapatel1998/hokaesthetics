<?php
ob_start();
?>
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" aria-label="home"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Wrinkle and Lines Treatments</li>
                    </ol>
                    <h2 class="breadcrumb-title">Wrinkle and Lines Treatments</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="service-details-section section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="service-section">
                    <span class="service-tag">Wrinkle and Lines Treatments</span>

                    <h2 class="mb-4">Effective Wrinkle and Lines Treatments for Smoother, Younger-Looking Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/wrinkle-lines-treatments.jpg" alt="Wrinkle and Lines Treatments">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Wrinkle and Lines Treatments are designed to soften expression lines and
                        restore a smoother, more refreshed appearance. Using advanced USFDA-approved technologies and
                        injectable techniques, every treatment is tailored after a thorough facial assessment to deliver
                        safe, natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our comprehensive approach addresses <strong>Fine Lines, Crow's Feet, Forehead Lines, Smile Lines,</strong>
                        and <strong>Marionette Lines</strong>. Whether the concern is early signs of aging or deeper, more
                        established lines, our expert team creates a customized treatment plan to help you achieve firmer,
                        more youthful-looking skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Fine Lines</h5>
                                <p class="mb-0 text-secondary">Softens early wrinkles for a smoother skin surface.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smooths Crow's Feet & Forehead Lines</h5>
                                <p class="mb-0 text-secondary">Relaxes expression lines around the eyes and forehead.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Youthful Contours</h5>
                                <p class="mb-0 text-secondary">Addresses smile lines and marionette lines for a refreshed look.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/skin-aesthetics-technologies.php'); ?>
                    <?php include('include/skin-aesthetics-why-choose.php'); ?>
                    <?php include('include/services-cta.php'); ?>
                </div>
            </div>
            <?php include('include/services-sidebar.php'); ?>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
require 'layout.php';
?>