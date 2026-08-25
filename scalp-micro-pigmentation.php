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
                        <li class="breadcrumb-item active">Scalp Micro Pigmentation</li>
                    </ol>
                    <h2 class="breadcrumb-title">Scalp Micro Pigmentation</h2>
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
                    <span class="service-tag">Scalp Micro Pigmentation</span>

                    <h2 class="mb-4">Scalp Micro Pigmentation for the Look of Natural Hair Density</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/scalp-micro-pigmentation.jpg" alt="Scalp Micro Pigmentation">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Scalp Micro Pigmentation treatments use precise micro-pigment deposits to
                        recreate the natural appearance of a closely shaved scalp or denser hair. Every session is
                        personalized after a detailed scalp assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        Our scalp micro pigmentation approach delivers <strong>Natural Look Density, Scar Camouflage,</strong>
                        and is <strong>Safe & Effective</strong> for all skin types. Whether you're looking to conceal
                        thinning areas, camouflage scars, or create the illusion of a fuller hairline, our expert team
                        creates a customized treatment plan to help you achieve a confident, natural look.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural Look Density</h5>
                                <p class="mb-0 text-secondary">Recreates the appearance of fuller, denser hair.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Scar Camouflage</h5>
                                <p class="mb-0 text-secondary">Blends transplant or injury scars into the surrounding scalp.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe & Effective</h5>
                                <p class="mb-0 text-secondary">A minimally invasive procedure with consistent, reliable results.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/skin-aesthetics-why-choose.php'); ?>
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
