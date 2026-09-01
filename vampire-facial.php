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
                        <li class="breadcrumb-item active">Vampire Facial</li>
                    </ol>
                    <h2 class="breadcrumb-title">Vampire Facial</h2>
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
                    <span class="service-tag">Vampire Facial</span>

                    <h2 class="mb-4">Vampire Facial (PRP) for Naturally Rejuvenated Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/vampire-facial.jpg" alt="Vampire Facial">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Vampire Facial uses your body's own Platelet-Rich Plasma (PRP) combined
                        with micro-needling to stimulate natural collagen production and skin renewal. Every session
                        is personalized after a detailed skin assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        PRP derived from your own blood is applied during micro-needling, delivering growth factors
                        deep into the skin. Whether you're looking to improve texture, tone, or overall skin
                        rejuvenation, our expert team creates a customized treatment plan to help you achieve firmer,
                        healthier-looking skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Boosts Natural Collagen</h5>
                                <p class="mb-0 text-secondary">Stimulates the skin's own renewal process using PRP.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Texture & Tone</h5>
                                <p class="mb-0 text-secondary">Refines skin surface for a smoother, more even look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe & Natural</h5>
                                <p class="mb-0 text-secondary">Uses your body's own plasma for a natural rejuvenation.</p>
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
