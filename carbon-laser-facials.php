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
                        <li class="breadcrumb-item active">Carbon Laser Facials</li>
                    </ol>
                    <h2 class="breadcrumb-title">Carbon Laser Facials</h2>
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
                    <span class="service-tag">Carbon Laser Facials</span>

                    <h2 class="mb-4">Carbon Laser Facials for Clearer, Refined Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/carbon-laser-facials.jpg" alt="Carbon Laser Facials">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Carbon Laser Facials use advanced USFDA-approved laser technology combined
                        with a specialized carbon lotion to deep-clean pores and resurface the skin. Every session is
                        personalized after a detailed skin assessment to ensure safe, effective, and comfortable results
                        with minimal downtime.
                    </p>

                    <p>
                        The carbon particles absorb excess oil and impurities from deep within the pores, which are
                        then targeted by the laser to exfoliate and stimulate collagen. Whether you're dealing with
                        oily skin, enlarged pores, or a dull complexion, our expert team creates a customized treatment
                        plan to help you achieve clearer, more refined skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Deep Pore Cleansing</h5>
                                <p class="mb-0 text-secondary">Draws out oil and impurities trapped in the pores.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Controls Oil & Shine</h5>
                                <p class="mb-0 text-secondary">Helps regulate excess sebum for a balanced complexion.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smoother, Refined Skin</h5>
                                <p class="mb-0 text-secondary">Improves texture and stimulates collagen renewal.</p>
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
