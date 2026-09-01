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
                        <li class="breadcrumb-item active">Medical Hair Management</li>
                    </ol>
                    <h2 class="breadcrumb-title">Medical Hair Management</h2>
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
                    <span class="service-tag">Medical Hair Management</span>

                    <h2 class="mb-4">Medical Hair Management for Stronger, Healthier Hair</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/medical-hair-management.jpg" alt="Medical Hair Management">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Medical Hair Management programs use clinically proven, doctor-led protocols
                        to address the root causes of hair fall and thinning. Every plan is personalized after a detailed
                        scalp and hair assessment to ensure safe, effective, and lasting results.
                    </p>

                    <p>
                        Our comprehensive approach focuses on <strong>Hair Fall Control, Growth Stimulation,</strong>
                        and <strong>Scalp Health Improvement</strong>. Whether you're dealing with early hair thinning,
                        seasonal shedding, or an unhealthy scalp environment, our expert team creates a customized
                        treatment plan to help you achieve fuller, healthier-looking hair.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Hair Fall Control</h5>
                                <p class="mb-0 text-secondary">Targets the underlying causes to reduce excessive shedding.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Growth Stimulation</h5>
                                <p class="mb-0 text-secondary">Activates hair follicles to encourage new, healthy growth.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Scalp Health Improvement</h5>
                                <p class="mb-0 text-secondary">Restores a balanced, nourished scalp for long-term hair health.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/hair-why-choose.php'); ?>
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
