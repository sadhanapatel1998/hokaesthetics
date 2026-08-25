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
                        <li class="breadcrumb-item active">Under Eye Rejuvenation</li>
                    </ol>
                    <h2 class="breadcrumb-title">Under Eye Rejuvenation</h2>
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
                    <span class="service-tag">Under Eye Rejuvenation</span>

                    <h2 class="mb-4">Under Eye Rejuvenation for a Brighter, Refreshed Gaze</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/under-eye-rejuvenation.jpg" alt="Under Eye Rejuvenation">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Under Eye Rejuvenation treatments use USFDA-approved fillers and
                        skin-boosting techniques to smooth hollows, reduce dark circles, and restore a well-rested
                        look. Every treatment is personalized after a detailed skin assessment to ensure safe,
                        effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our under eye treatments help address <strong>tear trough hollows, dark circles, fine lines,
                        </strong> and <strong>puffiness</strong>. Whether you're looking to soften shadows or
                        restore lost volume beneath the eyes, our expert team creates a customized treatment plan to
                        help you achieve a brighter, more youthful under-eye area.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Hollows</h5>
                                <p class="mb-0 text-secondary">Smooths tear trough hollows for a fuller under-eye area.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Brightens Dark Circles</h5>
                                <p class="mb-0 text-secondary">Improves the appearance of shadows and discoloration.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smooths Fine Lines</h5>
                                <p class="mb-0 text-secondary">Softens crepey skin for a refreshed, rested look.</p>
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
