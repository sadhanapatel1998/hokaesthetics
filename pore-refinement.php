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
                        <li class="breadcrumb-item active">Pore Refinement</li>
                    </ol>
                    <h2 class="breadcrumb-title">Pore Refinement</h2>
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
                    <span class="service-tag">Pore Refinement</span>

                    <h2 class="mb-4">Advanced Pore Refinement for Smoother, Refined Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/pore-refinement.jpg" alt="Pore Refinement">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Pore Refinement treatments use advanced USFDA-approved laser technology
                        to minimize the appearance of enlarged pores and refine overall skin texture. Every session is
                        personalized after a detailed skin assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        Our approach is designed to <strong>Minimizes Pores, Improves Skin Texture,</strong>
                        and deliver <strong>Smoother & Refined Skin</strong>. Whether you're dealing with visibly
                        enlarged pores or uneven texture, our expert team creates a customized treatment plan to help
                        you achieve a smoother, more refined complexion.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Minimizes Pores</h5>
                                <p class="mb-0 text-secondary">Reduces the visible size of enlarged pores.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Skin Texture</h5>
                                <p class="mb-0 text-secondary">Smooths uneven surface texture for a refined finish.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smoother & Refined Skin</h5>
                                <p class="mb-0 text-secondary">Leaves skin looking polished and even.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/laser-why-choose.php'); ?>
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
