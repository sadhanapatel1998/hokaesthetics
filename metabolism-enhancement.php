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
                        <li class="breadcrumb-item active">Metabolism Enhancement</li>
                    </ol>
                    <h2 class="breadcrumb-title">Metabolism Enhancement</h2>
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
                    <span class="service-tag">Metabolism Enhancement</span>

                    <h2 class="mb-4">Metabolism Enhancement for Sustained Energy & Weight Loss</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/metabolism-enhancement.jpg" alt="Metabolism Enhancement">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Metabolism Enhancement treatments are designed to boost your body's
                        natural metabolic rate, helping you burn calories more efficiently and support long-term
                        weight loss. Every treatment is personalized after a detailed health assessment to ensure
                        safe, effective results.
                    </p>

                    <p>
                        Our metabolism programs focus on <strong>boosting metabolic rate, improving energy
                        levels,</strong> and <strong>supporting healthy weight loss</strong>. Whether you're
                        looking to overcome a sluggish metabolism or maintain steady energy throughout the day, our
                        expert team creates a customized plan to help you feel and perform your best.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Boosts Metabolic Rate</h5>
                                <p class="mb-0 text-secondary">Helps your body burn calories more efficiently.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Energy Levels</h5>
                                <p class="mb-0 text-secondary">Supports sustained energy throughout the day.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Supports Healthy Weight Loss</h5>
                                <p class="mb-0 text-secondary">Aids steady, sustainable fat loss over time.</p>
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
