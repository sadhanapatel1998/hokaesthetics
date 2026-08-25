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
                        <li class="breadcrumb-item active">Tattoo Removal</li>
                    </ol>
                    <h2 class="breadcrumb-title">Tattoo Removal</h2>
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
                    <span class="service-tag">Tattoo Removal</span>

                    <h2 class="mb-4">Advanced Laser Tattoo Removal for Clearer Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/tattoo-removal.jpg" alt="Tattoo Removal">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Laser Tattoo Removal treatments use advanced USFDA-approved technology to
                        safely break down tattoo ink for gradual, effective fading. Every session is personalized after
                        a detailed skin and tattoo assessment to ensure safe, precise, and comfortable results with
                        minimal downtime.
                    </p>

                    <p>
                        Our approach is <strong>Safe & Precise</strong>, effectively <strong>Fades Unwanted Tattoos,</strong>
                        and delivers <strong>Better Skin Clarity</strong>. Whether you're looking to fully remove or
                        fade an existing tattoo, our expert team creates a customized treatment plan to help you achieve
                        clearer skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe & Precise</h5>
                                <p class="mb-0 text-secondary">Advanced laser technology targets ink accurately with minimal impact on surrounding skin.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Fades Unwanted Tattoos</h5>
                                <p class="mb-0 text-secondary">Gradually breaks down ink for progressive, visible fading.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Better Skin Clarity</h5>
                                <p class="mb-0 text-secondary">Restores a clearer, more even-toned complexion.</p>
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
