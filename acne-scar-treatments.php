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
                        <li class="breadcrumb-item active">Acne and Scar Treatments</li>
                    </ol>
                    <h2 class="breadcrumb-title">Acne and Scar Treatments</h2>
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
                    <span class="service-tag">Acne and Scar Treatments</span>

                    <h2 class="mb-4">Comprehensive Acne and Scar Treatments for Clearer, Healthier Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/acne-scar-treatments.jpg" alt="Acne and Scar Treatments">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Acne and Scar Treatments use advanced USFDA-approved technology to control
                        active breakouts, smooth textural scarring, and calm post-acne redness. Every treatment is
                        personalized after a detailed skin assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        Our comprehensive approach covers <strong>Active Acne Management, Acne Scars (Atrophic / Hypertrophic),</strong>
                        and <strong>Post Acne Redness</strong>. Whether you're dealing with ongoing breakouts, stubborn
                        scarring, or lingering redness, our expert team creates a customized treatment plan to help you
                        achieve clearer, smoother skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Controls Active Acne</h5>
                                <p class="mb-0 text-secondary">Manages breakouts and reduces future flare-ups.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Treats Atrophic & Hypertrophic Scars</h5>
                                <p class="mb-0 text-secondary">Smooths depressed and raised acne scars for an even texture.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Post-Acne Redness</h5>
                                <p class="mb-0 text-secondary">Calms inflammation and fades residual redness.</p>
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

<!-- Start Faq -->
<?php include('include/faqs.php'); ?>
<!-- End Faq -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>