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
                        <li class="breadcrumb-item active">Fire and Ice Facial</li>
                    </ol>
                    <h2 class="breadcrumb-title">Fire and Ice Facial</h2>
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
                    <span class="service-tag">Fire and Ice Facial</span>

                    <h2 class="mb-4">Fire and Ice Facial for an Instant Radiance Boost</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/fire-ice-facial.jpg" alt="Fire and Ice Facial">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Fire and Ice Facial combines a warming exfoliating mask with a cooling
                        soothing mask to deliver an instant glow with minimal irritation. Every session is personalized
                        after a detailed skin assessment to ensure safe, effective, and comfortable results with no
                        downtime.
                    </p>

                    <p>
                        The "fire" phase gently exfoliates and stimulates circulation, while the "ice" phase calms and
                        hydrates the skin. Whether you're looking for a quick pre-event glow or a soothing reset for
                        tired skin, our expert team creates a customized treatment plan to help you achieve visibly
                        brighter, smoother skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Instant Radiance</h5>
                                <p class="mb-0 text-secondary">Delivers a visible glow immediately after treatment.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Gentle Exfoliation</h5>
                                <p class="mb-0 text-secondary">Removes dull, dead skin cells without irritation.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Calms & Hydrates</h5>
                                <p class="mb-0 text-secondary">Soothes skin while locking in lasting moisture.</p>
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
