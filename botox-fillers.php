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
                        <li class="breadcrumb-item active">Botox and Fillers</li>
                    </ol>
                    <h2 class="breadcrumb-title">Botox and Fillers</h2>
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
                    <span class="service-tag">Botox and Fillers</span>

                    <h2 class="mb-4">Botox and Dermal Fillers for Natural, Youthful Results</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/botox-fillers.jpg" alt="Botox and Fillers">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Botox and Filler treatments use USFDA-approved injectables to relax
                        expression lines, restore lost volume, and enhance facial contours. Every treatment is
                        personalized after a detailed facial assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        Our advanced injectable solutions include <strong>Botox, Dermal Fillers, Skin Boosters, Volume Enhancement,</strong>
                        and <strong>Facial Contouring</strong>. Whether you're looking to soften wrinkles, restore facial
                        volume, or refine your facial structure, our expert team creates a customized treatment plan to
                        help you achieve balanced, natural-looking results.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smooths Wrinkles with Botox</h5>
                                <p class="mb-0 text-secondary">Relaxes dynamic wrinkles for a refreshed, natural look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Volume with Dermal Fillers</h5>
                                <p class="mb-0 text-secondary">Replenishes lost volume in cheeks, lips, and under-eyes.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Enhances Facial Contours</h5>
                                <p class="mb-0 text-secondary">Sculpts and defines facial features for balanced symmetry.</p>
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