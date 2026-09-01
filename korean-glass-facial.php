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
                        <li class="breadcrumb-item active">Korean Glass Facial</li>
                    </ol>
                    <h2 class="breadcrumb-title">Korean Glass Facial</h2>
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
                    <span class="service-tag">Korean Glass Facial</span>

                    <h2 class="mb-4">Korean Glass Facial for Smooth, Luminous Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/korean-glass-facial.jpg" alt="Korean Glass Facial">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Korean Glass Facial is a multi-step brightening treatment designed to
                        give skin that coveted smooth, poreless, "glass skin" finish. Every session is personalized
                        after a detailed skin assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        The treatment combines deep hydration, gentle exfoliation, and brightening actives to refine
                        texture and enhance skin's natural luminosity. Whether you're preparing for a special occasion
                        or simply want a lasting glow, our expert team creates a customized treatment plan to help you
                        achieve smooth, radiant skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smooth, Poreless Finish</h5>
                                <p class="mb-0 text-secondary">Refines texture for a flawless, "glass skin" look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Deep Hydration</h5>
                                <p class="mb-0 text-secondary">Restores moisture for plump, dewy-looking skin.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural Luminosity</h5>
                                <p class="mb-0 text-secondary">Enhances brightness for a healthy, radiant glow.</p>
                            </div>
                        </div>

                    </div>

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
