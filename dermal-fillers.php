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
                        <li class="breadcrumb-item active">Dermal Fillers</li>
                    </ol>
                    <h2 class="breadcrumb-title">Dermal Fillers</h2>
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
                    <span class="service-tag">Dermal Fillers</span>

                    <h2 class="mb-4">Dermal Fillers for Restored Volume & Youthful Contours</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/dermal-fillers.jpg" alt="Dermal Fillers">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Dermal Filler treatments use USFDA-approved hyaluronic acid-based
                        fillers to restore lost volume, smooth wrinkles, and enhance facial contours. Every treatment
                        is personalized after a detailed facial assessment to ensure safe, effective, and
                        natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Dermal fillers can be used to treat <strong>nasolabial folds, marionette lines, sunken
                        cheeks,</strong> and <strong>temple hollowing</strong>, as well as to restore facial
                        symmetry. Whether you're looking to soften deep lines or rebuild lost volume, our expert
                        team creates a customized treatment plan to help you achieve smooth, youthful contours.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Volume</h5>
                                <p class="mb-0 text-secondary">Rebuilds lost volume in cheeks, temples, and folds.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smooths Wrinkles</h5>
                                <p class="mb-0 text-secondary">Softens deep lines and folds for a refreshed look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Instant, Natural Results</h5>
                                <p class="mb-0 text-secondary">Delivers immediate, natural-looking enhancement.</p>
                            </div>
                        </div>

                    </div>

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
