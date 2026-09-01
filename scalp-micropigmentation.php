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
                        <li class="breadcrumb-item active">Scalp Micropigmentation</li>
                    </ol>
                    <h2 class="breadcrumb-title">Scalp Micropigmentation</h2>
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
                    <span class="service-tag">Scalp Micropigmentation</span>

                    <h2 class="mb-4">Scalp Micropigmentation for Natural Density & Confidence</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/scalp-micropigmentation.jpg" alt="Scalp Micropigmentation">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Scalp Micropigmentation treatment uses precise micro-deposits of pigment
                        to recreate the look of natural hair follicles across the scalp. Every session is personalized
                        after a detailed scalp assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        The technique builds the appearance of density by layering tiny, follicle-like dots that blend
                        seamlessly with your natural hair or scalp tone. Whether you're dealing with thinning hair or
                        a receding hairline, our expert team creates a customized treatment plan to help you achieve a
                        naturally fuller, more confident look.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural Density</h5>
                                <p class="mb-0 text-secondary">Recreates the look of fuller, closely-cropped hair.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Confident, Refreshed Look</h5>
                                <p class="mb-0 text-secondary">Restores a defined hairline and consistent coverage.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Long-Lasting Results</h5>
                                <p class="mb-0 text-secondary">A low-maintenance solution that holds its look over time.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/pmu-why-choose.php'); ?>
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
