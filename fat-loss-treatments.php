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
                        <li class="breadcrumb-item active">Fat Loss Treatments</li>
                    </ol>
                    <h2 class="breadcrumb-title">Fat Loss Treatments</h2>
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
                    <span class="service-tag">Fat Loss Treatments</span>

                    <h2 class="mb-4">Fat Loss Treatments for a Slimmer, Contoured Body</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/fat-loss-treatments.jpg" alt="Fat Loss Treatments">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Fat Loss Treatments use targeted, non-surgical technology to reduce
                        stubborn fat and refine body contours. Every treatment is personalized after a detailed
                        body assessment to ensure safe, effective, and natural-looking results with minimal
                        downtime.
                    </p>

                    <p>
                        Our fat loss treatments include <strong>targeted fat reduction, non-surgical treatments,
                        </strong> and <strong>inch loss and body contouring</strong>. Whether you're looking to
                        slim stubborn areas or refine your overall shape, our expert team creates a customized
                        treatment plan to help you achieve a more contoured, confident silhouette.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Targeted Fat Reduction</h5>
                                <p class="mb-0 text-secondary">Precisely targets stubborn fat pockets.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Non-Surgical Treatments</h5>
                                <p class="mb-0 text-secondary">Achieves results without surgery or downtime.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Inch Loss & Body Contouring</h5>
                                <p class="mb-0 text-secondary">Refines and reshapes your body's natural contours.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/weight-loss-why-choose.php'); ?>
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
