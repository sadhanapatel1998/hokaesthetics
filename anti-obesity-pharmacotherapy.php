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
                        <li class="breadcrumb-item active">Anti Obesity Pharmacotherapy</li>
                    </ol>
                    <h2 class="breadcrumb-title">Anti Obesity Pharmacotherapy</h2>
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
                    <span class="service-tag">Anti Obesity Pharmacotherapy</span>

                    <h2 class="mb-4">Anti Obesity Pharmacotherapy for Medically Guided Weight Loss</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/anti-obesity-pharmacotherapy.jpg" alt="Anti Obesity Pharmacotherapy">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Anti Obesity Pharmacotherapy program uses FDA-approved medications
                        under close medical supervision to support appetite control and weight reduction. Every
                        treatment is personalized after a detailed health assessment to ensure safe, effective, and
                        medically sound results.
                    </p>

                    <p>
                        Our pharmacotherapy program includes <strong>FDA approved medications, appetite
                        control,</strong> and <strong>safe and effective treatment</strong>. Whether you're looking
                        for medical support to manage cravings or a structured approach to significant weight loss,
                        our expert team creates a customized treatment plan under close supervision.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>FDA Approved Medications</h5>
                                <p class="mb-0 text-secondary">Uses trusted, medically approved treatment options.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Appetite Control</h5>
                                <p class="mb-0 text-secondary">Helps manage cravings and portion control.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe & Effective Treatment</h5>
                                <p class="mb-0 text-secondary">Delivered under close medical supervision.</p>
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
