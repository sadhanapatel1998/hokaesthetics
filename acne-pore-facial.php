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
                        <li class="breadcrumb-item active">Acne and Pore Facial</li>
                    </ol>
                    <h2 class="breadcrumb-title">Acne and Pore Facial</h2>
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
                    <span class="service-tag">Acne and Pore Facial</span>

                    <h2 class="mb-4">Acne and Pore Facial for Clearer, Balanced Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/acne-pore-facial.jpg" alt="Acne and Pore Facial">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Acne and Pore Facial is designed to deep-cleanse congested skin, control
                        excess oil, and minimize the appearance of enlarged pores. Every session is personalized after
                        a detailed skin assessment to ensure safe, effective, and comfortable results with minimal
                        downtime.
                    </p>

                    <p>
                        The treatment combines gentle extraction, targeted actives, and soothing care to calm active
                        breakouts and refine skin texture. Whether you're dealing with oily skin, clogged pores, or
                        occasional breakouts, our expert team creates a customized treatment plan to help you achieve
                        clearer, more balanced skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Deep Pore Cleansing</h5>
                                <p class="mb-0 text-secondary">Clears congestion and impurities from within the pores.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Controls Breakouts</h5>
                                <p class="mb-0 text-secondary">Calms active acne and helps prevent future flare-ups.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Minimizes Pores</h5>
                                <p class="mb-0 text-secondary">Refines pore appearance for smoother-looking skin.</p>
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
