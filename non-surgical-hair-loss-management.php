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
                        <li class="breadcrumb-item active">Non Surgical Hair Loss Management</li>
                    </ol>
                    <h2 class="breadcrumb-title">Non Surgical Hair Loss Management</h2>
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
                    <span class="service-tag">Non Surgical Hair Loss Management</span>

                    <h2 class="mb-4">Non Surgical Hair Loss Management for Natural Regrowth</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/non-surgical-hair-loss-management.jpg" alt="Non Surgical Hair Loss Management">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Non Surgical Hair Loss Management treatments use advanced, science-backed
                        therapies to revive weakened hair follicles and slow down hair loss — without surgery. Every
                        treatment is personalized after a detailed scalp assessment to ensure safe, effective, and
                        long-lasting results with no downtime.
                    </p>

                    <p>
                        Our advanced non-surgical solutions include <strong>PRP Therapy, GFC Therapy, Mesotherapy,</strong>
                        and <strong>Low Level Laser Therapy (LLLT)</strong>. Whether you're looking to strengthen thinning
                        hair, boost follicle activity, or prevent further hair loss, our expert team creates a customized
                        treatment plan to help you achieve thicker, healthier hair.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Revives Hair Follicles</h5>
                                <p class="mb-0 text-secondary">PRP and GFC Therapy stimulate natural follicle activity.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Nourishes the Scalp</h5>
                                <p class="mb-0 text-secondary">Mesotherapy delivers targeted nutrients directly to the scalp.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Non-Invasive & Painless</h5>
                                <p class="mb-0 text-secondary">LLLT boosts growth with zero downtime or discomfort.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/hair-why-choose.php'); ?>
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
