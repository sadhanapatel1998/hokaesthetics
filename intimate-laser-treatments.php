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
                        <li class="breadcrumb-item active">Intimate Laser Treatments</li>
                    </ol>
                    <h2 class="breadcrumb-title">Intimate Laser Treatments</h2>
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
                    <span class="service-tag">Intimate Laser Treatments</span>

                    <h2 class="mb-4">Intimate Laser Treatments for Better Intimate Wellness</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/intimate-laser-treatments.jpg" alt="Intimate Laser Treatments">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Intimate Laser Treatments use advanced, USFDA-approved laser technology
                        to support vaginal tissue health, tone, and comfort in a safe, non-surgical way. Every session
                        is personalized after a detailed and private consultation to ensure safe, effective results
                        with minimal downtime.
                    </p>

                    <p>
                        The laser stimulates collagen renewal within the vaginal tissue to improve elasticity, tone,
                        and overall comfort. Whether you're addressing changes related to childbirth, aging, or general
                        wellness, our expert team creates a customized treatment plan in a discreet, comfortable
                        setting.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Tissue Tone</h5>
                                <p class="mb-0 text-secondary">Stimulates collagen for firmer, healthier tissue.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Non-Surgical & Safe</h5>
                                <p class="mb-0 text-secondary">A gentle, USFDA-approved procedure with minimal downtime.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Comfort & Confidence</h5>
                                <p class="mb-0 text-secondary">Supports overall intimate wellness and wellbeing.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/gynaecology-why-choose.php'); ?>
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
