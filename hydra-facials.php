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
                        <li class="breadcrumb-item active">Hydra Facials</li>
                    </ol>
                    <h2 class="breadcrumb-title">Hydra Facials</h2>
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
                    <span class="service-tag">Hydra Facials</span>

                    <h2 class="mb-4">Hydra Facials for Deeply Cleansed, Hydrated Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/hydra-facials.jpg" alt="Hydra Facials">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Hydra Facials use advanced multi-step technology to cleanse, exfoliate,
                        and infuse the skin with hydrating serums in a single session. Every treatment is personalized
                        after a detailed skin assessment to ensure safe, effective, and comfortable results with no
                        downtime.
                    </p>

                    <p>
                        Our approach combines gentle exfoliation, extraction, and deep hydration to instantly refresh
                        the skin. Whether you're dealing with dryness, congestion, or dull skin, our expert team
                        creates a customized treatment plan to help you achieve smoother, more hydrated, glowing skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Deep Cleansing & Extraction</h5>
                                <p class="mb-0 text-secondary">Clears out impurities and congestion from the pores.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Intense Hydration</h5>
                                <p class="mb-0 text-secondary">Infuses skin with nourishing serums for lasting moisture.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Instant Glow, No Downtime</h5>
                                <p class="mb-0 text-secondary">Leaves skin visibly refreshed right after treatment.</p>
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
