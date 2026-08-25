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
                        <li class="breadcrumb-item active">Cheek Volumizing</li>
                    </ol>
                    <h2 class="breadcrumb-title">Cheek Volumizing</h2>
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
                    <span class="service-tag">Cheek Volumizing</span>

                    <h2 class="mb-4">Cheek Volumizing for Lifted, Youthful Contours</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/cheek-volumizing.jpg" alt="Cheek Volumizing">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Cheek Volumizing treatments use USFDA-approved dermal fillers to
                        restore volume, lift, and structure to the mid-face. Every treatment is personalized after a
                        detailed facial assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        Our cheek treatments help address <strong>flat or sunken cheeks, loss of facial volume,
                        sagging mid-face,</strong> and <strong>an aged, tired appearance</strong>. Whether you're
                        looking to restore youthful fullness or enhance your natural cheekbone structure, our expert
                        team creates a customized treatment plan to help you achieve a lifted, refreshed look.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Fullness</h5>
                                <p class="mb-0 text-secondary">Adds volume to flat or sunken cheeks.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Lifts the Mid-Face</h5>
                                <p class="mb-0 text-secondary">Provides subtle lift to sagging cheek areas.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Enhances Facial Structure</h5>
                                <p class="mb-0 text-secondary">Defines cheekbones for a more sculpted look.</p>
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
