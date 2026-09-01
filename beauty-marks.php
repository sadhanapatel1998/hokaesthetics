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
                        <li class="breadcrumb-item active">Beauty Marks</li>
                    </ol>
                    <h2 class="breadcrumb-title">Beauty Marks</h2>
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
                    <span class="service-tag">Beauty Marks</span>

                    <h2 class="mb-4">Beauty Marks — Subtle, Elegant, Timeless</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/beauty-marks.jpg" alt="Beauty Marks">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Beauty Mark treatment recreates the classic, subtle charm of a natural
                        beauty spot with precise, realistic pigmentation. Every treatment is personalized after a
                        detailed skin assessment to ensure safe, effective, and natural-looking results with minimal
                        downtime.
                    </p>

                    <p>
                        The placement and shade are carefully chosen to complement your features and add a timeless,
                        elegant accent. Whether you're inspired by a classic beauty spot or want to recreate a mark
                        you've always loved, our expert team creates a customized treatment plan to help you achieve a
                        subtle, striking finish.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Subtle & Realistic</h5>
                                <p class="mb-0 text-secondary">Recreates the natural look of a classic beauty spot.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Elegant Accent</h5>
                                <p class="mb-0 text-secondary">Adds a timeless, sophisticated detail to your look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Personalized Placement</h5>
                                <p class="mb-0 text-secondary">Positioned and shaded to complement your features.</p>
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
