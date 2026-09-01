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
                        <li class="breadcrumb-item active">Smile Makeover</li>
                    </ol>
                    <h2 class="breadcrumb-title">Smile Makeover</h2>
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
                    <span class="service-tag">Smile Makeover</span>

                    <h2 class="mb-4">Complete Smile Makeover for a Total Transformation</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/smile-makeover.jpg" alt="Smile Makeover">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Smile Makeover combines multiple cosmetic and restorative treatments
                        into one comprehensive plan to completely transform your smile. Every makeover is personalized
                        after a detailed smile design assessment to ensure safe, effective, and natural-looking
                        results.
                    </p>

                    <p>
                        Depending on your goals, a smile makeover may combine whitening, veneers, bonding, crowns, or
                        aligners to address color, shape, alignment, and overall balance. Whether you're addressing a
                        single concern or several at once, our expert team creates a customized treatment plan to help
                        you achieve the confident, complete smile you've always wanted.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Comprehensive Transformation</h5>
                                <p class="mb-0 text-secondary">Combines multiple treatments for a complete smile upgrade.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Personalized Smile Design</h5>
                                <p class="mb-0 text-secondary">Tailored to your facial features and goals.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Lasting Confidence</h5>
                                <p class="mb-0 text-secondary">A refreshed, natural-looking smile you'll love to show off.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/dental-why-choose.php'); ?>
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
