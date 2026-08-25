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
                        <li class="breadcrumb-item active">Neck Rejuvenation</li>
                    </ol>
                    <h2 class="breadcrumb-title">Neck Rejuvenation</h2>
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
                    <span class="service-tag">Neck Rejuvenation</span>

                    <h2 class="mb-4">Neck Rejuvenation for Firmer, Smoother Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/neck-rejuvenation.jpg" alt="Neck Rejuvenation">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Neck Rejuvenation treatments use USFDA-approved skin-tightening and
                        volumizing techniques to firm sagging skin, smooth bands, and restore a more youthful neck
                        contour. Every treatment is personalized after a detailed skin assessment to ensure safe,
                        effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our neck treatments help address <strong>skin laxity, platysmal bands, horizontal neck
                        lines,</strong> and <strong>loss of skin elasticity</strong>. Whether you're looking to
                        tighten sagging skin or smooth visible bands, our expert team creates a customized treatment
                        plan to help you achieve a firmer, more defined neck.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Tightens Skin</h5>
                                <p class="mb-0 text-secondary">Firms loose, sagging neck skin.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smooths Bands & Lines</h5>
                                <p class="mb-0 text-secondary">Reduces the appearance of platysmal bands and horizontal lines.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Elasticity</h5>
                                <p class="mb-0 text-secondary">Boosts collagen for firmer, more resilient skin.</p>
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
