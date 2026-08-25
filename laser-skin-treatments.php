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
                        <li class="breadcrumb-item active">Laser Skin Treatments</li>
                    </ol>
                    <h2 class="breadcrumb-title">Laser Skin Treatments</h2>
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
                    <span class="service-tag">Laser Skin Treatments</span>

                    <h2 class="mb-4">Advanced Laser Skin Treatments for Clear, Healthy Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/laser-skin-treatments.jpg" alt="Laser Skin Treatments">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Laser Skin Treatments use advanced USFDA-approved technology to improve skin texture,
                        reduce pigmentation, minimize scars, and restore a brighter, healthier complexion. Every treatment is
                        personalized after a detailed skin assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        Our advanced laser solutions include <strong>Laser Toning, Q-Switch Laser, CO₂ Laser, Fractional Laser,</strong>
                        and <strong>Diode Laser Hair Reduction</strong>. Whether you're looking to treat uneven skin tone, acne scars,
                        fine lines, unwanted hair, or stubborn pigmentation, our expert team creates a customized treatment plan to
                        help you achieve smoother, clearer, and more radiant skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Skin Texture</h5>
                                <p class="mb-0 text-secondary">Smooths rough skin and refines enlarged pores.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Pigmentation</h5>
                                <p class="mb-0 text-secondary">Targets dark spots, melasma, and uneven skin tone.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Scar & Hair Reduction</h5>
                                <p class="mb-0 text-secondary">Helps reduce acne scars while providing long-lasting hair reduction.</p>
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


<?php
$content = ob_get_clean();
require 'layout.php';
?>