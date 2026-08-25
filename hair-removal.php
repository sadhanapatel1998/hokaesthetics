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
                        <li class="breadcrumb-item active">Hair Removal</li>
                    </ol>
                    <h2 class="breadcrumb-title">Hair Removal</h2>
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
                    <span class="service-tag">Hair Removal</span>

                    <h2 class="mb-4">Advanced Laser Hair Removal for Smooth, Long-Lasting Results</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/hair-removal.jpg" alt="Hair Removal">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Laser Hair Removal treatments use advanced USFDA-approved technology to
                        target unwanted hair at the follicle for smooth, long-lasting reduction. Every session is
                        personalized after a detailed skin and hair assessment to ensure safe, effective, and comfortable
                        results with minimal downtime.
                    </p>

                    <p>
                        Our laser hair removal is designed to be <strong>Safe & Effective</strong>, <strong>Suitable for
                        All Skin Types,</strong> and delivers <strong>Long Lasting Results</strong>. Whether you're
                        looking to treat the face, body, or larger areas, our expert team creates a customized treatment
                        plan to help you achieve consistently smoother skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe & Effective</h5>
                                <p class="mb-0 text-secondary">Clinically proven laser technology for reliable, comfortable treatment.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Suitable for All Skin Types</h5>
                                <p class="mb-0 text-secondary">Customized settings ensure safe treatment across all skin tones.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Long Lasting Results</h5>
                                <p class="mb-0 text-secondary">Significant, lasting reduction in unwanted hair growth.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/laser-why-choose.php'); ?>
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
